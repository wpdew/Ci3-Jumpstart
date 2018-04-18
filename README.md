**Edit a file, create a new file, and clone from Bitbucket in under 2 minutes**

[![API](https://img.shields.io/badge/11%2022%20333-August%2023%2C%202017-36ade1.svg)](https://###)
![PHP](https://img.shields.io/badge/php-%3E%3D5.3-8892bf.svg)

<p class="badge-img">
<img src="https://img.shields.io/badge/color-brightgreen-brightgreen.svg?maxAge=2592000?style=plastic" alt="brightgreen">
<img src="https://img.shields.io/badge/color-green-green.svg?maxAge=2592000" alt="green">
<img src="https://img.shields.io/badge/color-yellowgreen-yellowgreen.svg?maxAge=2592000" alt="yellowgreen">
<img src="https://img.shields.io/badge/color-yellow-yellow.svg?maxAge=2592000" alt="yellow">
<img src="https://img.shields.io/badge/color-orange-orange.svg?maxAge=2592000" alt="orange">
<img src="https://img.shields.io/badge/color-red-red.svg?maxAge=2592000" alt="red">
<img src="https://img.shields.io/badge/color-lightgrey-lightgrey.svg?maxAge=2592000" alt="lightgrey">
<img src="https://img.shields.io/badge/color-blue-blue.svg?maxAge=2592000" alt="blue">
<img src="https://img.shields.io/badge/color-ff69b4-ff69b4.svg?maxAge=2592000" alt="ff69b4">
<img src="https://img.shields.io/badge/color-new-8892bf.svg?maxAge=2592000" alt="8892bf">
</p>

## Quick start
The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
composer create-project pomerla/ci3-jumpstart
```

When you're done, you can delete the content in this README and update the file with details for others getting started with your repository.

All controllers can contain an $autoload class variable, which holds an array of items to load prior to running the constructor. 
This can be used together with module/config/autoload.php, however using the $autoload variable only works for that specific controller.
    
	:::php
    <?php     
	class Xyz extends MX_Controller 
	{
		$autoload = array(
			'helper'    => array('url', 'form'),
			'libraries' => array('email'),
		);
	}

The Modules::$locations array may be set in the application/config.php file. ie:

    :::php
    <?php
    $config['modules_locations'] = array(
        APPPATH.'modules/' => '../modules/',
    );
    
*We recommend that you open this README in another tab as you perform the tasks below. You can [watch our video](https://youtu.be/0ocf7u76WSo) for a full demo of all the steps in this tutorial. Open the video in a new tab to avoid leaving Bitbucket.*

---

## Edit a file

You’ll start by editing this README file to learn how to edit a file in Bitbucket.

1. Click **Source** on the left side.
2. Click the README.md link from the list of files.
3. Click the **Edit** button.
4. Delete the following text: *Delete this line to make a change to the README from Bitbucket.*
5. After making your change, click **Commit** and then **Commit** again in the dialog. The commit page will open and you’ll see the change you just made.
6. Go back to the **Source** page.

---

## Create a file

Next, you’ll add a new file to this repository.

1. Click the **New file** button at the top of the **Source** page.
2. Give the file a filename of **contributors.txt**.
3. Enter your name in the empty file space.
4. Click **Commit** and then **Commit** again in the dialog.
5. Go back to the **Source** page.

Before you move on, go ahead and explore the repository. You've already seen the **Source** page, but check out the **Commits**, **Branches**, and **Settings** pages.

---

## Clone a repository

Use these steps to clone from SourceTree, our client for using the repository command-line free. Cloning allows you to work on your files locally. If you don't yet have SourceTree, [download and install first](https://www.sourcetreeapp.com/). If you prefer to clone from the command line, see [Clone a repository](https://confluence.atlassian.com/x/4whODQ).

1. You’ll see the clone button under the **Source** heading. Click that button.
2. Now click **Check out in SourceTree**. You may need to create a SourceTree account or log in.
3. When you see the **Clone New** dialog in SourceTree, update the destination path and name if you’d like to and then click **Clone**.
4. Open the directory you just created to see your repository’s files.

Now that you're more familiar with your Bitbucket repository, go ahead and add a new file locally. You can [push your change back to Bitbucket with SourceTree](https://confluence.atlassian.com/x/iqyBMg), or you can [add, commit,](https://confluence.atlassian.com/x/8QhODQ) and [push from the command line](https://confluence.atlassian.com/x/NQ0zDQ).
