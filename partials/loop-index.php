<? if ( have_posts() ) : while ( have_posts() ) : the_post() ?>

  <article id="post-<? the_ID() ?>" <? post_class() ?>>
    <header>
      <h1><a href="<? the_permalink() ?>"
             rel="bookmark"
             title="Permanent Link to <? the_title_attribute(); ?>">
          <? the_title(); ?></a>
      </h1>
    </header>
    <section>
      <? the_content('Read More&hellip;'); ?>
    </section>
    <footer>
      <div class="category"><? the_category(',') ?></div>
    </footer>
  </article><!-- /.post -->

<? endwhile; // end of loop ?>

  <nav class="post-pager">
    Pager
    <?= paginate_links(array(

    )) ?>
  </nav>

<? else : // If no posts ?>

  <div class="panel">
    <h1>Not Found</h1>
    <p>Sorry, but you are looking for something that isn't here.</p>
  </div>

<? endif; ?>