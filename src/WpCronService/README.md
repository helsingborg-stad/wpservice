# WpCronService Documentation

This README serves as documentation for two key classes within the `WpService\WpCronService` package: `WpCronJob` and `WpCronJobManager`. These classes are designed to manage WordPress cron jobs by providing an interface to schedule, delete, and manage cron jobs programmatically.

## Table of Contents
- [WpCronJob](#wpcronjob)
- [WpCronJobManager](#wpcronjobmanager)
  
## WpCronJob

### Description
The `WpCronJob` class represents a WordPress cron job. It encapsulates the information required for a cron job, including the hook name, the interval, the callback function to be executed, and any arguments required by the callback. 

---

## WpCronJobManager

### Description
The `WpCronJobManager` class is responsible for managing WordPress cron jobs. It allows for the creation, deletion, and updating of cron jobs by interacting with WordPress's cron API through the `WpService`. All cron jobs managed by the `WpCronJobManager` will have their hooks prefixed with a provided identifier to avoid conflicts with other plugins or themes and also to allow for easy identification of the cron jobs managed by the `WpCronJobManager`.

---

## Usage

### Example Usage of `WpCronJob`

```php
$job = new WpCronJob('my_custom_hook', 'hourly', 'my_callback_function', ['arg1', 'arg2']);
$jobManager = new WpCronJobManager('my_plugin_prefix_', $wpService);

// Add or update the job
$jobManager->upsert($job);

// Delete a job by hook name
$jobManager->delete('my_custom_hook');

// Delete all jobs managed by the WpCronJobManager
$jobManager->deleteAll();
```

This example demonstrates how to create a new cron job, add or update it using the `WpCronJobManager`, and delete specific or all cron jobs.


### Example deleting all cron jobs on plugin deactivation

```php
$jobManager = new WpCronJobManager('my_plugin_prefix_', $wpService);

register_deactivation_hook(__FILE__, function() use ($jobManager) {
    $jobManager->deleteAll();
});
```