# 💻 Professional Network Technician VM

> Pre-configured and ready-to-use virtual machine environment optimized for **network diagnostics, security testing, and system administration** tasks. Forget hours of setup—this VM has all the essential tools pre-installed.

---

## 🚀 Overview

This project provides a single **`.ova` (Open Virtual Appliance)** file containing a complete virtual machine built on a reliable Linux Desktop environment. It is designed to be the go-to platform for IT professionals, network technicians, and cybersecurity enthusiasts.

### Key Features

- **Optimized Environment:** Built using **VMware** to ensure maximum stability and optimal performance in a virtualized setting.
- **All Tools Ready:** Essential networking and security tools are **pre-installed, configured, and ready to launch** immediately.
- **Portable & Flexible:** Delivered as a standard `.ova` file, easily importable into **VirtualBox, VMware Workstation/Player, or any other major virtualization platform.**

---

## ⬇️ Download

The VM image is distributed as a single `.ova` file for easy deployment.

- **Download VM Image (.ova):** [https://mega.nz/file/qVcgnKRJ#1PJdrlncoGpKJ0fh4sXjxyueMl3TSgHTe0zMhoZZK0g](https://mega.nz/file/qVcgnKRJ#1PJdrlncoGpKJ0fh4sXjxyueMl3TSgHTe0zMhoZZK0g)

---

## 🛠️ Tools Included

The following essential networking and security tools are pre-installed and configured within the VM:

### Diagnostics & Analysis

- **Wireshark:** The industry standard for **network protocol analysis** and packet sniffing.
- **Nmap:** Network discovery and **security auditing** tool for identifying hosts and services.

### Security & Configuration

- **Netcat (`nc`):** Versatile network debugging tool for **reading/writing across network connections**.
- **OpenSSH Client:** Secure remote access is configured out-of-the-box.
- **Aircrack-ng Suite:** Comprehensive tools for **wireless network security auditing** (for educational and authorized testing purposes only).
- **VS Code:** Integrated development environment for scripting and configuration management.

---

## ⚙️ Getting Started: Quick Setup

Follow these steps to quickly import and start using the Professional Network Technician VM.

### 1. Download and Import

1.  Download the `.ova` file from the link above.
2.  Open your virtualization software (e.g., VMware, VirtualBox).
3.  Use the **"Import Appliance"** or **"Import Virtual Machine"** function to load the downloaded `.ova` file.

### 2. Default Credentials

The VM comes with a standard user for immediate access.

| Component            | Username        | Password      |
| :------------------- | :-------------- | :------------ |
| **Default User**     | `networking-vm` | `admin1234`   |
| **Root/Sudo Access** | Same as above   | Same as above |

> **IMPORTANT:** You are strongly advised to change the default password immediately after the first login for security purposes.

### 3. Network Configuration

The default network setting is suitable for general use, but it must be adjusted for network auditing.

- **Default Setting:** The VM is set to use **NAT** (Network Address Translation) by default. This allows the VM to access the internet and external networks via your host machine's IP.
- **For Auditing/Sniffing:** To allow the VM's tools (like Wireshark or Nmap) to scan the local network the host machine is on, switch the network adapter to **Bridged Adapter** mode in your virtualization settings.

---

## 📧 Support

For any issues or support inquiries regarding this virtual machine, please contact the developer:

**Joey Cadieux**
**Email:** `joeycadieux161@gmail.com`
