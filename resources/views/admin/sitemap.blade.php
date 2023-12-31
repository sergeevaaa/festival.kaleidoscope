<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <url>
        <loc>festival.permaviat.ru/</loc>
        <lastmod>2014-09-18T18:54:13+04:00</lastmod>
        <changefreq>always</changefreq>
        <priority>1.0</priority>
    </url>
	<url>
        <loc>festival.permaviat.ru/registration</loc>
        <lastmod>2014-09-18T18:54:13+04:00</lastmod>
        <changefreq>daily</changefreq>
        <priority>0.8</priority>
    </url>
    <url>
        <loc>festival.permaviat.ru/festivals</loc>
        <lastmod>2014-09-18T18:54:13+04:00</lastmod>
        <changefreq>daily</changefreq>
        <priority>0.6</priority>
    </url>
    <url>
        <loc>festival.permaviat.ru/help</loc>
        <lastmod>2014-09-18T18:54:13+04:00</lastmod>
        <changefreq>daily</changefreq>
        <priority>0.6</priority>
    </url>
	<url>
        <loc>festival.permaviat.ru/members</loc>
        <lastmod>2014-09-18T18:54:13+04:00</lastmod>
        <changefreq>daily</changefreq>
        <priority>0.6</priority>
    </url>
    @foreach($festivals as $festival)
        <url>
            <loc>festival.permaviat.ru/festivals/{{$festival->id}}</loc>
            <lastmod>{{$festival->updated_at->tz('UTC')->toAtomString()}}</lastmod>
            <changefreq>daily</changefreq>
            <priority>0.8</priority>
        </url>
    @endforeach
    @foreach($apps as $app)
        <url>
            <loc>festival.permaviat.ru/application/{{$app->id}}</loc>
            <lastmod>{{$app->updated_at->tz('UTC')->toAtomString()}}</lastmod>
            <changefreq>daily</changefreq>
            <priority>0.8</priority>
        </url>
    @endforeach
</urlset>
