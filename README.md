# Av Laravel — README

## 🕸️ Overview

Av Laravel is the full-stack web platform that complements the FaveAndroid affiliate app. It provides:

* A **Blade-powered dashboard** for affiliates to manage products, track leads, view commissions, and personalize their storefronts.
* A **customer-facing e-commerce platform** where shoppers browse affiliate storefronts, place orders, and complete payments.
* RESTful API endpoints to connect mobile apps (FaveAndroid) or other clients.

This README covers project layout, installation, key features, API contract highlights, database schema, deployment, and recommended workflows.

---

## 🚀 Key Features

* Affiliate dashboard (Blade + Bootstrap/Tailwind)

  * Manage products, variants, prices, promo codes
  * View leads and customer contact details
  * Track commission states: pending → approved → paid
  * Link management and short link generation for social sharing
  * Analytics: Views, clicks, conversions, top products
* Customer storefronts

  * Each affiliate has a personalized sub-path or subdomain (e.g., `av.ke/affiliate/{username}`)
  * Full checkout flow (cart, address, shipping, payment)
  * Order tracking and receipts (email + in-app)
* Admin panel

  * Global product management, affiliate onboarding, payouts, dispute resolution
* API for mobile/web clients

  * Authentication (Laravel Sanctum or Passport)
  * Referral tracking and commission attribution
  * Webhooks for payment providers
* Background processing

  * Queued jobs for emails, reconciliation, commission calculations
  * Scheduler for payouts and reconciliations

---

## 🧰 Tech Stack

* PHP 8.1+ with Laravel 10+
* Blade templating for server-rendered dashboard
* MySQL / PostgreSQL
* Laravel Sanctum (or Passport) for API auth
* Redis for cache & queue
* Horizon for queue monitoring (optional)
* Cashier / third-party integrations for payments (Stripe, M-Pesa via third-party package)
* Nginx / Apache for the web server

---

## 📁 Project Structure

```
project-root/
├── app/
├── bootstrap/
├── config/
├── database/
│   ├── migrations/
│   ├── seeders/
│   └── factories/
├── resources/
│   ├── views/            # Blade views: affiliate dashboard, storefront, emails
│   ├── css/
│   └── js/
├── routes/
│   ├── web.php           # Blade routes
│   └── api.php           # API routes for mobile/web clients
├── public/
├── tests/
└── README.md
```

---

## ⚙️ Installation & Local Setup

1. Clone repository

```bash
git clone https://github.com/yourname/av-laravel.git
cd av-laravel
```

2. Install PHP dependencies

```bash
composer install
```

3. Node dependencies and assets

```bash
npm install
npm run dev
```

4. Environment

* Copy `.env.example` → `.env`
* Set DB, cache, queue, and payment provider keys

5. Generate app key & run migrations

```bash
php artisan key:generate
php artisan migrate --seed
```

6. Start local server

```bash
php artisan serve
```

---

## 🔗 API Highlights (Integration points)

* Authentication

  * `POST /api/auth/login` — returns Sanctum token
  * `POST /api/auth/register` — affiliate/customer signup
* Products & Storefront

  * `GET /api/affiliates/{id}/products`
  * `GET /api/storefront/{affiliate}/products`
* Referrals & Commission

  * `POST /api/referrals` — register a referral/lead (used by mobile app/share links)
  * `POST /api/orders` — create order; associates referral to calculate commission
* Webhooks

  * `POST /api/webhooks/payments/{provider}` — payment confirmation

**Note:** All API routes that change state should require authentication and CSRF protection where appropriate. Use `withCredentials` and Sanctum for SPA/mobile flows.

---

## 🗂️ Database Schema (high level)

* users (id, name, email, role[affiliate,customer,admin], password, profile)
* affiliates (id, user_id, slug, settings, payout_details)
* products (id, affiliate_id, sku, title, description, price, stock, variants)
* referrals (id, affiliate_id, customer_id?, source, short_code, metadata, created_at)
* orders (id, affiliate_id, customer_id, total, status, payment_provider, created_at)
* order_items (id, order_id, product_id, qty, price)
* commissions (id, order_id, affiliate_id, amount, status[pending,approved,paid])
* payouts (id, affiliate_id, amount, status, scheduled_at)

---

## 💸 Commission Flow (example)

1. Affiliate shares a short link containing `ref` token: `av.ke/p/1234?ref=AFF123`.
2. Customer visits store, places order; frontend records `ref` and sends it with the order.
3. On successful payment webhook, server creates `order`, `order_items`, and then a `commission` record for affiliate.
4. Commission moves from `pending` to `approved` after return/refund window or manual verification.
5. Admin schedules payout; system marks `paid` when transfer completes.

---

## 🧪 Testing

* Unit tests: `php artisan test`
* Browser tests: Laravel Dusk (if UI flows are critical)
* Use `php artisan queue:work --tries=3` for testing queued jobs locally

---

## 📦 Deployment Recommendations

* Use a process manager for workers (Supervisor) and pm2 for node-based asset previews if used.
* Use SSL (Let’s Encrypt) and force HTTPS.
* Configure Redis for cache/session and queues.
* Configure scheduled tasks: `php artisan schedule:run` (cron every minute)
* Backups for DB and uploaded media

---

## 🧩 Connecting with FaveAndroid and Other Clients

* Use Sanctum tokens for mobile authentication or issue API tokens per affiliate.
* Provide endpoints the mobile app needs: referrals, product lists, order creation, commission status.
* Consider rate-limiting and throttling for public endpoints to prevent abuse.

---

## 👥 Roles & Permissions

* Admin: full access
* Affiliate: manage own products, view leads & commissions
* Customer: shop, view orders

Use Laravel Policies and Gates to protect resources.

---

## 🔐 Security Notes

* Validate/escape all user input in Blade views to prevent XSS
* Use prepared statements / Eloquent ORM to avoid SQL injection
* Use HTTPS and secure cookies
* Rate-limit public endpoints

---

## 📚 Migration & Seeder Tips

* Seed sample affiliates, products, and a test admin for local development
* Keep seeder data idempotent where possible

---

## 📞 Support & Next Steps

Would you like me to:

* Add full API route definitions with request/response examples,
* Create migration files + Eloquent models skeletons,
* Draft blade templates for the affiliate dashboard (wireframes + markup),
* Or generate deployment scripts for Ubuntu/Nginx + Supervisor?
