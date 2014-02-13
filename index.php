<?php get_header(); ?>
			<section id="listaArtykulow">
				<?php if (have_posts()) : ?>
				<?php while (have_posts()) : the_post(); ?>
				<article>
					<?php
						if(is_single()){
							 setPostViews(get_the_ID());
						}
					?>
						<header>
							<a href="<?php the_permalink(); ?>">
								<?php 
									if ( has_post_thumbnail() ) { 
										the_post_thumbnail( 'duzy_waski_kwadrat' ); 
									} 
								?>
							</a>
							<div class="metaIkonki">
									<?php $czas = get_post_custom_values('czas');
									if($czas != null){ ?>
										<div class="mataCzas metaIkonka">
											<?php echo $czas[0]; ?>
										</div>
									<?php } ?>
									<?php $trudnosc = get_post_custom_values('trudnosc');
									if($trudnosc != null){ ?>
										<div class="mataTrudnosc metaIkonka">
											<?php echo $trudnosc[0]; ?>
										</div>
									<?php } ?>
									<?php $cena = get_post_custom_values('cena');
									if($cena != null){ ?>
										<div class="mataKoszt metaIkonka">
											<?php echo $cena[0]; ?>
										</div>
									<?php } ?>
							</div>
							<div class="clear"></div>
							<p class="metaInformacje"><?php the_time('j F Y') ?> <?php the_category(', ') ?></p>
							<h1 class="tytul_artykulu"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
							
						</header>
						<?php
				          echo getPostViews(get_the_ID());
						?>
						<?php the_content(); ?>
				</article>
				<?php endwhile; ?>
				<div class="navigation">
				<div class="alignleft">
				<?php posts_nav_link('','','&laquo; Poprzednie wpisy') ?>
				</div>
				<div class="alignright">
				<?php posts_nav_link('','Następne wpisy &raquo;','') ?>
				</div>
				</div>
				<?php else : ?>
				<h2 class="center">Nie znaleziono</h2>
				<p class="center"><?php _e("Niestety, nie znaleziono żądanych postów."); ?></p>
				<?php endif; ?>
				
			</section>
			<aside id="panelBoczny">
				<form id="wyszukiwarka">
					<input type="text" placeholder="wyszukaj">
				</form>
				<h3>O blogu i o mnie</h3>
				<p>Nazywam się Marysia i bardzo lubię jeść. Od kilku lat lubię też gotować. Okazało się, że inni lubią z kolei jeść to, co ugotowałam. I o tym jest ten blog.</p>
				<p>Piszę o Japonii - moim ulubionym kraju z najlepszym i najzdrowszym jedzeniem na świecie. O słodyczach, bo one wychodzą mi chyba najlepiej. O czasie, którego często brakuje w kuchni, ale dzięki temu wpadają do głowy świetne pomysły i niebanalne rozwiązania.</p>
				<h3>Najpopularniejsze przepisy</h3>
				<ul id="najpopularniejszePrzepisy">
					<li>
						<a href="#">
							<img src="min_obrazek1.jpg">
							Zupa z mięsem i zieleniną
						</a>
					</li>
					<li>
						<a href="#">
							<img src="min_obrazek2.jpg">
							Japońskie kuleczki z ryżem i kapustą
						</a>
					</li>
					<li>
						<a href="#">
							<img src="min_obrazek1.jpg">
							Zupa z mięsem i zieleniną
						</a>
					</li>
					<li>
						<a href="#">
							<img src="min_obrazek2.jpg">
							Japońskie kuleczki z ryżem i kapustą
						</a>
					</li>
				</ul>
			</aside>
		
<?php get_footer(); ?>