<?php echo validation_errors(); ?>

<?php echo form_open('news/update/'.$news_item['id']); ?>

<label for="title">Judul</label>
<input type="text" name='title' value='<?php echo $news_item['title']?>'><br>

<label for="text">Text</label>
<textarea name="text" id="" cols="30" rows="10"><?php echo $news_item['text']?></textarea><br>

<input type="submit" name='submit' value="kirim!">

</form>