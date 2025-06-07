# 🛒 Custom WooCommerce Plugin Project

## Overview

This project is a **custom WooCommerce plugin** built to extend the functionality of a standard WooCommerce-powered store. Designed for flexibility and scalability, it introduces specialized features such as custom product fields, payment gateways, and a new post type for course management — making it ideal for businesses that need more than the default WooCommerce setup.

---

## 💡 Features

* 🔧 **Custom Product Fields**
  Add and manage additional product metadata directly from the WooCommerce product edit screen.

* 💳 **Custom Payment Gateway**
  Integrates a unique payment method tailored to specific business requirements or local payment processors.

* 📚 **Course Post Type**
  Registers a new custom post type for "Courses" – great for businesses offering digital products, training, or services.

* ✅ **WooCommerce Hooks & Filters**
  Fully utilizes WooCommerce hooks for clean integration and WordPress best practices.

---

## 🧩 Plugin Structure

```
custom-woocommerce-additions/
├── class-course-post-type.php         # Custom post type for Courses
├── class-custom-gateway.php          # Custom WooCommerce payment gateway
├── class-custom-product-field.php    # Adds custom fields to WooCommerce products
└── custom-woocommerce-additions.php  # Main plugin file
```

---

## 🚀 Installation

1. Clone or download the plugin into your `/wp-content/plugins/` directory:

   ```bash
   git clone https://github.com/rxymitchy/Custom-Woocomerce.git
   ```

2. Activate the plugin from the WordPress admin panel.

3. Ensure WooCommerce is installed and activated.

---

## 🔄 Usage

* **Custom Product Fields**
  Navigate to **Products > Edit Product** and scroll down to see new custom fields.

* **Custom Gateway**
  Go to **WooCommerce > Settings > Payments** to enable the custom payment method.

* **Course Post Type**
  A new menu item **Courses** will appear in the admin sidebar to add/manage course content.

---

## ⚙️ Configuration

You can modify default settings in the plugin files to match your store’s logic — such as field labels, payment gateway logic, and post type settings.

For dynamic settings, consider building an admin settings page in future versions.

---

## 📊 Dependencies

* WordPress 5.8+
* WooCommerce 6.0+
* PHP 7.4+

---

## 🧪 Development & Debugging

To test locally:

* Use [LocalWP](https://localwp.com/) or [DevKinsta](https://kinsta.com/devkinsta/).
* Enable WP\_DEBUG in your `wp-config.php`.

---

## 📌 To-Do / Roadmap

* [ ] Add admin settings panel
* [ ] Add multilingual support (WPML/Polylang)
* [ ] Integrate more custom post types
* [ ] Add unit tests for payment gateway logic

---

## 🤝 Contributing

Pull requests are welcome! If you'd like to suggest changes or improvements, feel free to fork the repository and submit a PR.

---

## 📜 License

MIT License. You can freely use, modify, and distribute this plugin with proper attribution.

---
