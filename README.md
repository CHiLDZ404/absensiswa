# EZIN — Converted Next.js scaffold

This repository is an initial conversion of the uploaded Laravel project into a **Next.js** app so it can be deployed to **Vercel** and hosted on **GitHub**.

**What I created (initial pass)**

- Minimal Next.js scaffold (pages, API placeholder)
- Copied frontend view assets and saved original Blade templates into `/views_backup` for reference.
- Added README with deployment and migration guidance.

**Important notes / manual steps you must do**
1. Database, authentication, and server-side business logic in Laravel were **NOT** automatically migrated.
   - You should port your models and controllers into Node/Next API routes or a separate backend (e.g. Express, Prisma, Supabase).
   - SQL schema is available at `erikpra2_eizin.sql` in the original files (copied to `/original_files`).
2. Blade templates were converted to simple React pages as placeholders. You'll need to refine HTML/CSS and client-side logic.
3. Static assets (images, css, js) were copied where possible to `/public/static`.
4. Environment variables: create `.env.local` for Next.js and `VERCEL` project settings when deploying.

**How to run locally**
```bash
cd your-repo
npm install
npm run dev
```

**How to deploy to Vercel (overview)**
1. Push this repo to GitHub.
2. Create a new Vercel project and connect your GitHub repo.
3. Set environment variables in Vercel (DATABASE_URL, etc.) and deploy.

---

Files created in `/mnt/data/ezin_converted_nextjs`.
Original project files are copied to `/mnt/data/ezin_converted_nextjs/original_files` for reference.
