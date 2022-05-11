<?php

$tags = get_the_tags();

foreach ($tags as $value) { ?>
  <li class="filters__item">
    <a href="<?php echo home_url('/');?>tag/<?php echo $value->slug ?>">
      <?php echo $value->name; ?>
    </a>
  </li>

<?php

} ?>