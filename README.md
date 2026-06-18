# Theme uniquification — two child themes that look like different products

Test task: take one free parent theme and build **two child themes** that are visually
**and** structurally dissimilar, so a search engine can't fingerprint them as one network.

- **Parent:** [GeneratePress](https://wordpress.org/themes/generatepress/) (free, wordpress.org)
- **Plugin:** Advanced Custom Fields (free)
- **Solution write-up:** see [`SOLUTION.md`](./SOLUTION.md)

## Live demos (InstaWP)

| Theme | Live URL |
|---|---|
| MediClinic Care (`theme-a`) | _TODO: add InstaWP link_ |
| NovaSaaS Studio (`theme-b`) | _TODO: add InstaWP link_ |

## The two themes

| | **MediClinic Care** (`theme-a`) | **NovaSaaS Studio** (`theme-b`) |
|---|---|---|
| Product feel | Healthcare clinic | SaaS / startup |
| Palette | Warm beige + deep green | Near-black + neon violet |
| Type pair | Fraunces / Inter | Space Grotesk / IBM Plex Sans |
| Header | Centered logo, menu below | Logo left, nav + CTA right (sticky) |
| Footer | 4 columns, centered copyright | 2 columns + social, left copyright |
| **Body layout** | Two-column (right sidebar) | One-column (no sidebar) |
| **DOM / classes** | `mc-*`, `.mc-article` | `ns-*`, `.ns-entry` |
| **Internal files** | `inc/header,footer,acf` | `parts/site-header,site-footer,fields` |
| ACF group | **Clinic Info** (phone, hours, address, map, emergency) | **Pricing Highlight** (plan, price, billing, CTA, featured) |
| `style.css` | MediClinic Care · v1.0.0 | NovaSaaS Studio · v2.3.0 |
| `generator` meta | removed | removed |

The differentiation is **structural, not just cosmetic**: each theme rewrites the
GeneratePress header/footer via hooks (`remove_action('generate_header', …)`), uses a
different sidebar layout (different `body_class` + DOM), different class prefixes, and a
different internal file structure. Colour/typography is the lightest layer on top.

## Install (local)

1. Install the **GeneratePress** parent theme.
2. Install + activate **Advanced Custom Fields** (free).
3. Copy `theme-a/` and/or `theme-b/` into `wp-content/themes/`.
4. Activate the child theme. ACF groups register automatically (PHP, no import needed).

> ACF groups are registered in code (`acf_add_local_field_group`) using free-tier field
> types only — no ACF Pro / no DB import required.

## Repo structure
```
├── SOLUTION.md      approach write-up (part 1)
├── theme-a/         MediClinic Care child theme
└── theme-b/         NovaSaaS Studio child theme
```
