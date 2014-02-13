<?php get_header(); ?>
			<section id="listaArtykulow">
				<?php if (have_posts()) : ?>
				<?php while (have_posts()) : the_post(); ?>
				<article>
						<header>
							<a href="<?php the_permalink(); ?>">
								<?php 
									if ( has_post_thumbnail() ) { 
										the_post_thumbnail( 'duzy_waski_kwadrat' ); 
									} 
								?>
							</a>
							<div class="metaIkonki">
								<div class="mataCzas metaIkonka">
									<span>30</span> min
								</div>
								<div class="mataTrudnosc metaIkonka">
									łatwe
								</div>
								<div class="mataKoszt metaIkonka">
									<span>36</span> zł
								</div>
							</div>
							<div class="clear"></div>
							<p class="metaInformacje"><?php the_time('j F Y') ?> <span class="nazwaKategorii">Mięso</span></p>
							<h1 class="tytul_artykulu"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
							
						</header>
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