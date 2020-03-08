# 30suns Hosted Status Page
Contributors: sozot
Tags: status, status page, hosted status page, service health, status dashboard, service health dashboard
Requires at least: 3.0
Tested up to: 5.3.2
Donate link: https://sozot.com/
Stable tag: 1.3.2
License: GPLv2 or later

30suns makes it easy to start publishing incident reports on a status page.

## Description

30suns makes it easy to start publishing incident reports on a status page.

This plugin makes it easy to embed your 30suns hosted status page into a normal WordPress page or post using a <code>[thirtysuns]</code> shortcode. You'll need a [30suns.com Username](http://30suns.com/) to use it and you will need to define at least one service. Usernames are free to try with paid subscriptions available for businesses and commercial sites.

### Benefits of Publishing a Hosted Status Page

If your organization is a solution provider, you understand that downtime can reduce customer confidence and impair your reputation. Hopefully, you can keep downtime to a minimum, but if you do have service outages, it's imperative that you provide your users with access to real-time status updates. 

Knowing your own service status is the first step and there are plenty of excellent monitoring tools like munin, statsd, graphite, and services like [Pingdom](https://www.pingdom.com/), [New Relic](http://newrelic.com/) and others that can assist with your internal service status tracking.

30suns completes the monitoring and reporting loop by providing your users with a centralized service health dashboard similar to the status pages that many professional platform and service providers publish, e.g., [Amazon Web Services](http://status.aws.amazon.com/), [Google Apps](http://www.google.com/appsstatus) and [Windows Azure](http://www.windowsazure.com/en-us/support/service-dashboard/).

Publishing a status page will improve communication with your users and can even result in fewer support requests during outages.

30suns hosted status page includes additional benefits such as:

* Full-stack incident reporting, including Current Status, Status History and Scheduled Maintenance
* Account-level and Service-specific RSS Feeds
* WordPress plugin makes it easy to publish your dashboard directly from your WordPress site.
* Simple RESTful API lets you integrate easily with your existing monitoring environment
* No Risk - enjoy a free trial with no long-term contracts and pay-as-you-go pricing starting at just $7/mo

To get started, 1) register for a trial account at [30suns.com/register/](https://30suns.com/register/) and add at least one service, 2) install this plugin and enter your username in the settings area and 3) create a page with the shortcode <code>[thirtysuns]</code>.

## Installation

Upload the 30suns plugin to your blog, Activate it, then enter your [30suns.com Username](http://30suns.com/). Create a page and insert the shortcode <code>[thirtysuns]</code>. 

That's it! When you publish incident reports on 30suns they will be immediately visible on your site's status page.

## Screenshots

1. An example of a hosted status page on 30suns.com for Amazon Web Services. When you register, you will be able to list your own services and logo on your public profile page.
2. An example of embedding a hosted status page within WordPress using the default Twenty Twelve theme, this plugin and the sample Amazon Web Services dashboard. When you activate the plugin and add your 30suns username in the settings area you can embed your 30suns dashboard within any page on your site using the [thirtysuns] shortcode.

## Changelog

### 1.3.2
* Supports WordPress 5.3.2

### 1.3.1
* Supports WordPress 5.x

### 1.3.0
* Supports WordPress 4.8.2

### 1.2
* Moved to Git repository

### 1.1
* Supports WordPress 3.9

### 1.0
* First version, allows specifying 30suns username and allows embedding a user's status dashboard using the [thirtysuns] shortcode.
