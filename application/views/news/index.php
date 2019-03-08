<?php foreach($news as $news_item) {?>
<h1> <a href="<?php echo site_url("news/".$news_item['slug'])?>"><?= $news_item['title']?></a> </h1>
<p><?= $news_item['text']?></p>
<a href="<?php echo site_url("news/update/".$news_item['id'])?>">edit</a>
<a href="<?php echo site_url("news/delete/".$news_item['id'])?>">hapus</a>
<?php } ?>