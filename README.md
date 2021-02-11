# MapRoulette Blog Theme

Veloce Child Theme for MapRoulette.

---

## Development

It's recommended you setup a local instance of Wordpress and install the `Veloce` theme. Once up and running, clone this repository to the themes directory and activate the theme to preview changes as you customize the theme.

```bash
cd wp-content/themes/
git clone git@github.com:maproulette/blog-theme.git maproulette
```

### Directory Structure

<pre><code>- style.css         # theme information 
-- css              # styles to override the parent theme CSS
- functions.php     # bootstrap the child theme styles and scripts etc.</code></pre>

## Deployment

> - Requires SSH access to the server and rsync on the client and host machines.

Run the following commands to deploy the theme changes to the production site.

```bash
chmod +x ./deploy # set permissions to allow execution of rsync bash script
./deploy prod # dry run to preview deltas
./deploy prod go # deploy
```

---

## ToDo:

- [ ] Theme [Screenshot](https://codex.wordpress.org/Theme_Development#Screenshot)
- [ ] Further post / content customization to match the look of the main site.
