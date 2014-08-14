# Remote Markdown

Gets markdown files hosted remotely and parses their contents.

Uses the [Parsedown Markdown Parser](http://parsedown.org/) (which supports [GitHub Flavored Markdown](https://help.github.com/articles/github-flavored-markdown)), it was originally made for embedding GitHub readmes into pages.

- [GitHub repo](https://github.com/richjenks/wp-remote-markdown)
- [Plugin page](https://richjenks.com/dev/wp/remote-markdown/)

## Usage

Add the `[remote-markdown]` shortcode to your content and put the URL of your markdown file in the `url` attribute:

```
[remote-markdown url="https://raw.githubusercontent.com/richjenks/wp-remote-markdown/master/README.md"]
```