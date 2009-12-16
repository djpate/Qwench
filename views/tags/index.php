<h1><?php printf(ngettext("%d Tag", "%d Tags", $count), $count); ?></h1>
<div style="clear:both"></div>

<div class="tags_list">
<ul class="holder noborder">
<?php foreach ($tags as $tag):?>
<li class="bit-box nopadding"><a href="<?php echo basePath();?>/questions?tag=<?php echo $tag['tag'];?>"><?php echo $tag['tag'];?></a> x <?php echo $tag['count'];?></li>
<?php endforeach;?>
</ul>
</div>