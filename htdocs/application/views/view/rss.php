<?php
header('Content-Type:text/xml; charset=UTF-8'); ?><?xml version="1.0" encoding="UTF-8"?> <rss version="2.0"
xmlns:content="http://purl.org/rss/1.0/modules/content/"
xmlns:wfw="http://wellformedweb.org/CommentAPI/"
xmlns:dc="http://purl.org/dc/elements/1.1/"
xmlns:atom="http://www.w3.org/2005/Atom"
xmlns:sy="http://purl.org/rss/1.0/modules/syndication/"
xmlns:slash="http://purl.org/rss/1.0/modules/slash/"
>
<channel>
    <title><?php echo $page_title; ?></title>
    <atom:link href="<?php echo $feed_url; ?>" rel="self" type="application/rss+xml" />
    <link><?php echo base_url(); ?></link>
    <language>en</language>
<?php foreach($replies as $paste): ?>
<item>
    <title><?php echo $paste['title']; ?></title>
    <link><?php echo site_url('view/' . $paste['pid']) ?></link>
    <pubDate><?php echo date('c', $paste['created']); ?></pubDate>
    <dc:creator><?php echo $paste['name']; ?></dc:creator>
    <guid isPermaLink="false"><?php echo site_url('view/' . $paste['pid']) ?></guid>
    <content:encoded><![CDATA[<?php echo $paste['paste']; ?>]]></content:encoded>
</item>
<?php endforeach; ?>
</channel>
</rss>