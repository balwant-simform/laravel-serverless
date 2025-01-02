# 🌟 Laravel Serverless Application 🚀

Welcome to the **Laravel Serverless App**! This repository demonstrates how to deploy a Laravel application on **AWS Lambda** using the power of `Bref` and `Serverless.js`🎉

---

## ✨ Features

- 🛠 **Serverless Architecture**: Deploy Laravel with ease to AWS Lambda.
- ⚡ **Powered by Bref**: PHP runtime on AWS Lambda made simple.
- 🚀 **Job Handling**: Seamless integration with **AWS SQS** for queue jobs.
- 🖥 **Minimal Setup**: Straightforward deployment with `serverless deploy`.
- 🌍 **Environment-Aware**: Flexible configuration based on environment variables.

---

## 📂 Project Structure

The application includes:

- A `serverless.yml` file for deployment configuration.
- Laravel's default structure with additional serverless compatibility.
- A `/` route to test serverless functionality and AWS SQS integration.

---

## 🛠 Getting Started

Follow these steps to set up and deploy the Laravel serverless application:

### 1️⃣ Prerequisites

Ensure you have the following installed:
- **PHP 8.3** or later
- **Composer**
- **AWS CLI** configured with your credentials
- **Node.js** and **Serverless Framework** globally installed:
  ```bash
  npm install -g serverless

### 2️⃣ Clone the Repository
```bash
  git clone https://github.com/balwant-simform/laravel-serverless.git
```

```bash
  cd laravel-serverless
```

### 3️⃣ Install Dependencies
```bash
  composer install
```

### 4️⃣ Update Environment Configuration
```bash
  cp .env.example .env
```

### ⚙️ Deployment
```bash
  serverless deploy
```
-  **This command will**:
- Package your application.
- Deploy it to AWS Lambda.
- Create the necessary API Gateway endpoints.
- Provide a url for deployed application, from you can access the app and run the laravel app


## 🚀 Testing the Application
Hit the provided URL of laravel application and check:

- **Expected Behavior**
- Logs a message: I was inside the serverless architecture.
- Dumps a sample array: [1, 2, 3].
- Dispatches a job to the AWS SQS queue.
- Renders the default Laravel welcome view.

## 👨‍💻 Job Handling with AWS SQS
The application uses AWS SQS for queue processing. Ensure that:

- Your SQS queue is set up and configured in .env.
- Worker jobs are processed correctly. Use the following command to monitor jobs locally:
```bash
php artisan queue:work
```
For production, set up a worker on AWS Lambda using the same serverless deploy process.


## 🌈 Customization
Modify the **serverless.yml**
- Adjust settings like:
 - Region: Default is **us-east-1**.
 - Environment Variables: Add or update application-specific variables.
 - Timeout: Set as per your application's needs.

## 🛠 Troubleshooting

### Deployment Errors:
- Ensure your AWS credentials are configured correctly.
- Check the `serverless.yml` for syntax issues.

### Runtime Errors:
- Verify the PHP version in `serverless.yml` matches your local environment.
- Review CloudWatch logs for more details.

### Queue Processing:
- Ensure your SQS queue is active and correctly linked in `.env`.


### Happy Coding! 😎💚
