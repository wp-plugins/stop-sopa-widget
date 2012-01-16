=== Stop SOPA Widget ===
Contributors: jonefox
Tags: sopa, stop sopa, pipa, stop online piracy act, stop protect ip, online piracy act, protect ip
Requires at least: 3.0
Tested up to: 3.3.1
Stable tag: 1.0

This plugin adds a widget that will show a modal window to increase awareness about SOPA/PIPA on Jan 18th.

== Description ==

In case you haven't already heard, congress is currently reviewing new bills that threaten the very fabric of the internet. The Stop Online Piracy Act (SOPA) bill, and it's sister bill, Protect IP Act (PIPA), are currently working their way through the United States Congress and the Senate. If these bills pass any copyright holder can simply allege a site infringes on their copyright and the site could be redirected at the DNS level and be cut off from all major ad services and payment processing services - all without any trial or due process of any kind. It's scary stuff, but we won't rehash the full issue here. Read this post, https://www.eff.org/deeplinks/2011/10/sopa-hollywood-finally-gets-chance-break-internet, from the Electronic Frontier Foundation to learn more about this issue.

Many companies have voiced their protest and will be blacking out their sites or informing their users about these upcoming bills. We saw what other companies like Reddit and Craigslist were doing and wanted to offer other sites an easy way to participate. We came up with a javascript snippet you can add to your page that will show a popup like you see in the screenshot.

The SOPA popup will only be displayed on January 18th from 8am-8pm EST (1300-0100 UTC) by default, but if you're javascript savvy feel free to change that. The popup will also only be displayed to a user once (by setting a cookie in their browser). You can also manually trigger the message before then by adding the hash #stopsopa to the end of any URL that has the JavaScript installed. If you don't want our hosted version, feel free to grab the source from github (https://github.com/torbit/Stop-SOPA-Widget), otherwise grab the plugin and add it to your site.

Help us protect the internet! Contact your representatives, spread the word, and join us in protesting censorship!

Features include:

*   Defaults to show the Stop SOPA message on January 18th from 8am-8pm EST (1300-0100 UTC)
*   Uses cookies so the message is only shown once
*   Loaded asynchronously (won't block the rendering of your page or cause another point of failure)
*   You can manually trigger the modal before the 18th by adding the hash #stopsopa to the end of any URL on your site
*   Works across browsers (tested on everything from IE6 to iphone)
*   Our hosted version is served from a CDN for speed/global delivery
*   Supports SSL
*   Hackable! Feel free to modify and update however you'd like.

== Installation ==

1. Upload `stop-sopa.php` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress

OR

Just grab it from the built in plugin directory and choose "Install now", hit ok, then select the "Activate Plugin" link.

== Screenshots ==

1. This is a screenshot of the message that your sites visitors will see during the protest period ( January 18th from 8am-8pm EST (1300-0100 UTC) )