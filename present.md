# 🎤 AKM – Personal Finance Tracker | Presentation Guide
---

## 1. 🔥 Hook (Start Strong)

> "Most people struggle to track their money. Bank apps are confusing, spreadsheets are boring, and we forget where our money went. What if you could automatically track your expenses from your SMS messages, see insights, and manage your money—all privately and locally?"

> "That’s what AKM is. A self-hosted finance tracker that works like magic—powered by Laravel, React, and optionally ChatGPT."

---

## 2. 🧠 What Is AKM?

> "Hisabi is a personal finance tracker. It reads your bank SMS messages, extracts the transaction info (amount, vendor, date), and helps you understand your finances using graphs, charts, categories, and even smart insights via ChatGPT."

### Key Features

- 📥 SMS Parser: Reads and extracts transaction data
- 📊 Income & Expense Tracking
- 📈 Reports & Graphs by category, date, and more
- 🧠 ChatGPT Assistant (optional)
- 🔐 Admin Panel & Multi-user support
- 🚀 Self-hosted: Private and offline-friendly

---

## 3. 🛠 Tech Stack

- 🧠 Backend: Laravel (PHP)
- 🎨 Frontend: React.js + Inertia.js
- 🌐 API: GraphQL
- 🧮 Database: MySQL (via XAMPP or Docker)
- 🤖 AI Assistant: OpenAI GPT (optional)
- 🐳 Docker (for deployment or local dev)

> "We chose Laravel + React + GraphQL for a modern full-stack app with speed, flexibility, and simplicity."

---

## 4. 🚦 How It Works

1. User signs up or logs in.
2. SMS messages are parsed (or added manually).
3. Transactions are stored and categorized.
4. Insights and charts are generated.
5. Optionally, user asks ChatGPT for summaries like:
   > "Where did I spend most this month?"

---

## 5. 🚀 Live Demo (or Offline Demo)

1. Start MySQL and Apache in XAMPP
2. Navigate to the project folder in terminal and run:

```bash
php artisan serve
```

✅ Example SMS Messages (Based on Templates):
Purchase Notification:

• Purchase of ETB 250.00 with VISA1234 at Edna Mall.
• Payment of ETB 500.00 to DSTV with MasterCard.
• Dashen Bank of ETB 3,000.00 has been credited into your account on 2025-04-21 14:22.
• ETB 1,200.00 has been debited from your CBE account using VISA1234 at Shoa Supermarket on 2025-04-20 18:45.
• Dashen PAYMENT for VISA1234 via MOBAPP of ETB 880.00 was debited from 2025-04-19 10:20.
• An ATM cash withdrawal of ETB 2,000.00 from your CBE account on 2025-04-18 16:05.
• Your Cr.Card VISA1234 was used for ETB 720.00 on 2025-04-21 13:30 at Zara, ignore.
