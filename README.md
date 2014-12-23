# Remote Markdown

Gets markdown files hosted remotely and parses their contents.

## Purpose

Using the [Parsedown Markdown Parser](http://parsedown.org/) (which supports [GitHub Flavored Markdown](https://help.github.com/articles/github-flavored-markdown)), it was originally made for embedding GitHub readmes into pages.

You can use it to generate pages for your plugins by embedding the repo's parsed readme and that's what's been done with this plugin's [Plugin page](https://richjenks.com/dev/wp/remote-markdown/) to save me maintaining the same content in two places.

## Usage

Add the `[remote-markdown]` shortcode to your content and put the URL of your markdown file in the `url` attribute:

```
[remote-markdown url="https://raw.githubusercontent.com/richjenks/wp-remote-markdown/master/README.md"]
```
