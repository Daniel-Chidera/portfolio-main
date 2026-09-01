# How to Add a New Project

This file explains how to add a new project to the portfolio. Keep it in
the project root for future reference.

There are up to 3 places a project can appear. Only the first one is
required — the other two are optional depending on whether you want the
project visible on the listing/grid page and/or the homepage.


## 1. Add the project's data (required)

Open `data/project-details.php`.

Copy one existing array entry from top to bottom (for example, the
`'new-world'` block), paste it right before the closing `];` at the
bottom of the file, and change these things:

- The array key (e.g. `'new-world'`) — this becomes the project's slug.
  Use lowercase letters and hyphens only, no spaces.
  Example: `'my-next-project'`

- `name` — the project's display name

- `tagline` — one short sentence shown under the title

- `badge` — the small pill shown above the title (e.g. "Client Work / E-Commerce")

- `client` — who the project was built for

- `type` — usually "Web"

- `status` — usually "Completed"

- `overview` — a paragraph describing the project

- `features` — exactly 6 short bullet strings describing key features

- `tech` — an array of technology names used

- `live_url` — the real live link, or `'#'` if there isn't one yet

- `source_url` — a GitHub link, or `'#'` if not applicable

- `image` — path to a screenshot. Use a local path like
  `'assets/img/my-project.png'` (recommended) or a full external URL.

That's it. The case study page for this project now exists automatically
at:

    project.php?slug=my-next-project

No new PHP file or CSS is needed for the case study itself — the
`project.php` template handles it using the data you just entered.


## 2. Add it to the Projects grid page (optional but recommended)

Open `projects.php`.

Find `<div class="project-grid">`, copy one existing `.project-card`
block (from `<div class="project-card" ...>` to its closing `</div>`),
and paste it right before the grid's closing `</div>`.

Update inside your pasted copy:

- The `<h2>` one-line description
- The `aria-label` on the arrow link
- The arrow link's `href` — set it to `project.php?slug=my-next-project`
  to connect it to the case study page from step 1
- The image `src`
- The `<h3 class="project-card-name">` project name
- The description paragraph
- The tag pills

The grid layout is automatic — a new card just slots in and wraps to a
new row on its own. No CSS changes needed.


## 3. Feature it on the homepage (optional)

Only do this if you want the project to also appear in the "Featured
Projects" section on the homepage. Not every project needs to be
featured there — 3 or 4 is a reasonable number to keep that section from
getting too long.

Open `index.php`.

Find `<div class="project-list">` inside the Featured Projects section,
copy one existing `.project-row` block, and paste it right before the
list's closing `</div>`.

Update inside your pasted copy:

- The image `src`
- The project name
- The description paragraph
- The 3 bullet points
- The tag pills
- The "View Live Project" link's `href` (or leave as `#` if there's no
  live link yet)
- The "Case Study" link's `href` — set it to
  `project.php?slug=my-next-project`


## Images

Save project screenshots into `assets/img/`. If a filename has spaces in
it, either rename it with hyphens instead (recommended, e.g.
`my-project.png`), or if you keep the spaces, write `%20` in place of
each space in the `src` attribute (e.g. `assets/img/my%20project.png`).


## Quick checklist for adding a new project

- [ ] Added an entry to `data/project-details.php` with a unique slug
- [ ] Screenshot saved in `assets/img/`
- [ ] Added a card to `projects.php` (if it should appear in the grid)
- [ ] Added a row to `index.php` (only if it should be featured on the homepage)
- [ ] Tested `project.php?slug=your-slug` loads correctly
