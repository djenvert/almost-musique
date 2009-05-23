<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <?php foreach ($projects as $project):?>
    <url>
    		<loc><?php echo Router::url(array('controller' => 'projects', 'action' => 'view', 'id' => $project['Project']['id'], 'slug' => $project['Project']['slug']), true)?></loc>
            <lastmod><?php echo $time->toAtom($project['Project']['modified']); ?></lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.9</priority>
        </url>
    <?php endforeach; ?>
    <?php foreach ($posts as $post):?>
    <url>
            <loc><?php echo Router::url(array('controller' => 'posts', 'action' => 'view', 'id' => $post['Post']['id'], 'slug' => $post['Post']['slug']), true)?></loc>
            <lastmod><?php echo $time->toAtom($post['Post']['modified']); ?></lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
    <?php endforeach; ?>
	<?php foreach ($news as $item):?>
    <url>
            <loc><?php echo Router::url(array('controller' => 'news', 'action' => 'view', 'id' => $item['News']['id'], 'slug' => $item['News']['slug']), true)?></loc>
            <lastmod><?php echo $time->toAtom($item['News']['modified']); ?></lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
    <?php endforeach; ?>
    <url>
            <loc><?php echo Router::url(array('controller' => 'news', 'action' => 'index'), true)?></loc>
            <lastmod>2008-01-27T20:41:52Z</lastmod>
            <changefreq>monthly</changefreq>
            <priority>0.9</priority>
        </url>
    <url>
            <loc><?php echo Router::url(array('controller' => 'projects', 'action' => 'index'), true)?></loc>
            <lastmod>2008-01-27T20:41:52Z</lastmod>
            <changefreq>monthly</changefreq>
            <priority>0.5</priority>
        </url>
    <url>
            <loc><?php echo Router::url(array('controller' => 'posts', 'action' => 'index'), true)?></loc>
            <lastmod>2008-01-27T20:41:52Z</lastmod>
            <changefreq>monthly</changefreq>
            <priority>0.5</priority>
        </url>
</urlset>