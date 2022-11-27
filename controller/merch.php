<?php
require 'configmerch.php';
class merch{
   public function add($info,$img)
    {   $name=$info['namep'];
        $price=$info['price'];
        $quantity=$info['quantity'];
        $description=$info['description'];
        $file_name = $img['name'];
        $file_temp = $img['tmp_name'];
        $file_size = $img['size'];
        $location="upload/".$file_name;
        if($file_size < 5242880)
        {
			if(move_uploaded_file($file_temp, $location))
            {
                        
                $db=config::getConnexion();
                $sql = "INSERT INTO merch(name,price,quantity,img_url,description)
                VALUES ('$name','$price','$quantity','$location','$description')";
                $db->query($sql);
            }
        }
    }
    public function affiche()
    {
        $db=config::getConnexion();
        $sql="Select * FROM merch";
       return $db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }
    public function delete($id)
    {
        $db=config::getConnexion();
        $sql="Delete FROM merch where id='$id'";
        $db->query($sql);
    }
    public function modify($id,$info,$img)
    { 
        $db=config::getConnexion();
        $name=$info['namep'];
        $price=$info['price'];
        $quantity=$info['quantity'];
        $description=$info['description'];
        $file_name = $img['name'];
        $file_temp = $img['tmp_name'];
        $file_size = $img['size'];
        $location="upload/".$file_name;
        if ($name!='')
        {
            $sql = "UPDATE merch SET name='$name' where id='$id'";
            $db->query($sql);
        }
        if($price!='')
        {
            $sql = "UPDATE merch
            SET price='$price' where id='$id'";
            $db->query($sql);
        }
        if($quantity!='')
        {
            $sql = "UPDATE merch
            SET quantity='$quantity' where id='$id'";
            $db->query($sql);
        }
        if($description!='')
        {
            $sql = "UPDATE merch
            SET description='$description' where id='$id'";
            $db->query($sql);
        }
        if($file_size < 5242880 && $file_name!='')
        {
			if(move_uploaded_file($file_temp, $location))
            {
                $sql = "UPDATE merch(name,price,quantity,img_url,description)
                SET img_url='$location' where id='$id'";
                $db->query($sql);
            }
        }


    }
}
class panier
{
    public function addbasket($id,$id_prod)
    {
        //verif
        $db=config::getConnexion();
        $sql1="SELECT * from panier where id_user='$id'";
        $fetch=$db->query($sql1);
        if($fetch->rowCount()==0)
        {
            $sql="INSERT INTO panier(id_panier,id_user)
            VALUES (NULL,'$id')";
            $db->query($sql);
        }
        $fetch1=$db->query($sql1)->fetchAll(PDO::FETCH_ASSOC);
        $id_panier=$fetch1[0]['id_panier'];
        $sql="INSERT INTO panier_merch(id_panier,id_merch,quantity)
        VALUES ('$id_panier','$id_prod',1)";
        $db->query($sql);
        $sql="Select * from panier_merch where id_panier='$id_panier' and id_merch='$id_prod'";
        $fetch2=$db->query($sql);
        $fetch3=$db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        if($fetch2->rowCount()>1)
        {
            $j=0; 
            for($i=1;$i<$fetch2->rowCount();$i++)  
            {
                $id_panier_merch=$fetch3[$i]['id_panier_merch'];
                $sql="Delete from panier_merch where id_panier_merch='$id_panier_merch'";
                $db->query($sql);
                $j=$j+1;
            }
            $sql="Update panier_merch SET quantity=quantity+'$j' where id_panier='$id_panier' and id_merch='$id_prod'";
            $db->query($sql);
            $sql="Select * from merch where id='$id_prod'";
            $fetch4=$db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
            $quantityg=$fetch4[0]["quantity"];
            $sql="Select * from panier_merch where id_panier='$id_panier' and id_merch='$id_prod'";
            $fetch5=$db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
            $quantity=$fetch5[0]['quantity'];
            if($quantity>$quantityg)
            {
                $sql="Update panier_merch SET quantity='$quantityg' where id_panier='$id_panier' and id_merch='$id_prod'";
                $db->query($sql);
            }
        }
    }
    public function showbasket($id)
    {
        $db=config::getConnexion();
        $sql="SELECT * from panier where id_user='$id'";
        $fetch=$db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        $fetch4=$db->query($sql)->rowCount();
        if($fetch4>0)
        {
            $id_panier=$fetch[0]['id_panier'];
            $sql="SELECT * from panier_merch where id_panier='$id_panier'";
            $fetch1=$db->query($sql)->rowCount();
            if($fetch1>0)
            {
                $fetch2=$db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
                for($i=0;$i<$fetch1;$i++)
                {   
                    $idprod=$fetch2[$i]['id_merch'];
                    $sql="SELECT * from merch where id='$idprod'";
                    $fetch3=$db->query($sql);
                    foreach($fetch3 as $row)
                    {
                        $product[$i]=array($row['img_url'],$row['name'],$row['price'],$fetch2[$i]['quantity'],$row['quantity'],$row['id']);
                    }
                }
            }
            else if($fetch1==0)
            {
                $sql="DELETE from panier where id_panier='$id_panier'";
                $db->query($sql);
            }
        }
        else if($fetch4==0)
        {
        $product=(array) null;
        }
        
        return $product; 
    }

    public function deletebasket($id,$id_merch)
    {  
        $db=config::getConnexion();
        $sql="Select * from panier where id_user='$id'";
        $fetch=$db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        $fetch1=$db->query($sql)->rowCount();
        if($fetch1>0)
        {
        $id_panier=$fetch[0]['id_panier'];
        $sql="Select * from panier_merch where id_merch='$id_merch' and id_panier='$id_panier'";
        $fetch2=$db->query($sql)->rowCount();
        $fetch3=$db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        if($fetch2>0)
            {
                $id_panier_merch=$fetch3[0]['id_panier_merch'];
            }

            $sql="DELETE from panier_merch where id_panier_merch='$id_panier_merch'";
            $db->query($sql);
        }
    }
}
class commande
{
    public function addcheckout($id,$total,$points)
    { 
        $date=date('Y-m-d H:i:s');
        $db=config::getConnexion();
        $sql="INSERT INTO commande Values(NULL,'$id','$total',false,'$date',NULL)";
        $db->query($sql);
        $sql="SELECT * from commande where id_user='$id'";
        $fetch=$db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        $fetch1=$db->query($sql)->rowCount();
        $id_com=$fetch[$fetch1-1]['id_com'];
        $sql="SELECT * from panier where id_user='$id'";
        $fetch2=$db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        $id_panier=$fetch2[0]['id_panier'];
        $sql="SELECT * from panier_merch where id_panier='$id_panier'";
        $fetch3=$db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        $fetch4=$db->query($sql)->rowCount();
        for($i=0;$i<$fetch4;$i++)
        {
            $id_merch=$fetch3[$i]['id_merch'];
            $quantity=$fetch3[$i]['quantity'];
            $sql="INSERT INTO commande_user VALUES(NULL,'$id_com','$id_merch','$quantity')";
            $db->query($sql);
            $sql="SELECT * from merch where id='$id_merch'";
            $fetch5=$db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
            $newquantity=$fetch5[0]['quantity']-$quantity;
            $sql="UPDATE merch SET quantity='$newquantity' where id='$id_merch'";
            $db->query($sql);
        }
        $newpoints=$points-$total;
        $sql="UPDATE user SET points='$newpoints' where id='$id'";
        $db->query($sql);
        $sql="DELETE from panier where id_user='$id'";
        $db->query($sql);
    }

    public function showcheckout_only_user($id)
    {
        $db=config::getConnexion();
        $sql="Select * from commande where id_user='$id'";
        $db->query($sql)->fetchAll(PDO::FETCH_ASSOC); 
 //  $fetch=$db->query($sql)->fetchALL(PDO::FETCH_ASSOC);
 //  $id_panier=$fetch[0]["id_panier"];
 //  $sql="Select * from panier_merch where id_panier='$id_panier'";
 //  $fetch1=$db->query($sql)->fetchALL(PDO::FETCH_ASSOC);
 //  $fetch2=$db->query($sql)->rowCount();
 //  for($i=0;$i<$fetch2;$i++)
 //  {
 //     $id_merch=$fetch1['id_merch'];
 //     $sql="SELECT * from merch where id='$id_merch'";
 //            $fetch3=$db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
 //            $tab[$i]=array($fetch3[0]['img_url'],);
     
    }
    public function showcheckout_all()
    {
        $db=config::getConnexion();
        $sql="Select * FROM merch";
       return $db->query($sql)->fetchAll(PDO::FETCH_ASSOC);

    }

}



?>