<?php
include "database.php";
function tema_ayar()
{
  global $db;
  $tema_sorgu = $db -> query("SELECT * FROM tema_ayar")->fetch(PDO::FETCH_ASSOC);
  return $tema_sorgu;
}
function kategoriler()
{
  global $db;
  $kategori_sorgu = $db -> query("select kategori.ad,count(*) as say
from makale inner join kategori
on makale.kategori_id = kategori.id
group by kategori.id order by say desc")->fetchAll(PDO::FETCH_ASSOC);
  return $kategori_sorgu;
}
function kayitol($kuladi,$ad,$soyad,$parola,$mail)
{
  global $db;
  $kayitol = $db->prepare("INSERT INTO kullanici(kuladi,pass,ad,soyad,mail) VALUES (?,?,?,?,?)");
  $kayitol->execute(array($kuladi,$parola,$ad,$soyad,$mail));
}
?>
