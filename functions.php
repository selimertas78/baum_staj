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
function girisyap($kuladi,$sifre)
{
  global $db;
  $girisyap = $db -> prepare("select kuladi, pass from kullanici where kuladi= ? and pass= ?");
  $girisyap -> execute(array($kuladi,$sifre));
  return $girisyap -> rowCount();
}
function icerikgetir(){
  global $db;
  $icerikler = $db -> query("SELECT
makale.id,
makale.baslik,
makale.icerik,
makale.zaman,
kullanici.kuladi,
kategori.ad
FROM
makale
INNER JOIN kullanici ON makale.kul_id = kullanici.id
INNER JOIN kategori ON kategori.id = makale.kategori_id ORDER BY zaman DESC")->fetchAll(PDO::FETCH_ASSOC);
  return $icerikler;
}

function tekilicerik($id){
  global $db;
  $icerik = $db -> query("SELECT
	makale.baslik,
	makale.icerik,
	makale.zaman,
	kullanici.kuladi,
	kategori.ad
	FROM
	makale
	INNER JOIN kullanici ON makale.kul_id = kullanici.id
	INNER JOIN kategori ON kategori.id = makale.kategori_id
  WHERE makale.id = $id")->fetch(PDO::FETCH_ASSOC);
  return $icerik;
}

?>
