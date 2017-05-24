<div class="userbar scrollwhite">
	<aside>
		<a href="/admin" <?php if($dc->IsUrl('')): ?> class="sel"<?php endif ?>
			<i class="fa fa-user-circle"></i>
			Главная
		</a>
<!--		<a href="/admin/gallery.php" --><?php //if($dc->IsUrl('gallery.php')): ?><!-- class="sel"--><?php //endif ?><!-->
<!--			<i class="fa fa-image"></i> -->
<!--			Галерея-->
<!--		</a>-->
		<a href="/admin/contacts.php" <?php if($dc->IsUrl('contacts.php')): ?> class="sel"<?php endif ?>
		<i class="fa fa fa-phone" aria-hidden="true"></i>
		Контакты
		</a>
		<a href="/admin/reviews.php" <?php if($dc->IsUrl('reviews.php')): ?> class="sel"<?php endif ?>
			<i class="fa fa-comment-o"></i>
			Отзывы
		</a>
		<a href="/admin/accaunt.php" <?php if($dc->IsUrl('accaunt.php')): ?> class="sel"<?php endif ?>
			<i class="fa fa-key" aria-hidden="true"></i>
			Сменить пароль
		</a>
	</aside>
</div>