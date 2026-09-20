# WordPress migration batch 1 — 2026-09-19
- Audited target main branch; `newsite` untouched.
- Located source in `satnamkhowal/groot-academy-wordpress`.
- Matched filesystem with 2026-09-16 WXR export.
- Confirmed legacy SQL is custom contact/meta data, not a full WordPress DB.
- Restored missing Educavo main stylesheet.
- Added root-safe URL helpers and stable post-card packaging.
- Added legacy attachment alias registry.
- Excluded WordPress core/plugins/config/cache and unknown executable files from live migration.
