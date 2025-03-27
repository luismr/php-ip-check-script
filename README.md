# PHP IP Check Script

![PHP Version](https://img.shields.io/badge/PHP-7.4-blue.svg)
![Docker](https://img.shields.io/badge/Docker-20.10-blue.svg)

A PHP script to check IP addresses and their associated information.

## File Structure

```
.
├── LICENSE.md
├── README.md
├── .gitignore
└── src/
    └── solve.php
```

## Prerequisites

- PHP 7.4 or higher
- Docker (optional, for containerized execution)

## Running the Script

### On macOS/Linux

```bash
# Navigate to the project directory
cd php-ip-check

# Run the script
php src/solve.php [IP_ADDRESS]
```

### On Windows

```powershell
# Navigate to the project directory
cd php-ip-check

# Run the script
php src/solve.php [IP_ADDRESS]
```

### Using Docker

Using the official PHP CLI image:

```bash
# Run the script using PHP CLI image
docker run --rm -v $(pwd):/app -w /app php:7.4-cli php src/solve.php [IP_ADDRESS]
```

For Windows PowerShell:
```powershell
docker run --rm -v ${PWD}:/app -w /app php:7.4-cli php src/solve.php [IP_ADDRESS]
```

## Input Parameters

The script accepts the following input:
- `IP_ADDRESS`: The IP address to check (optional, if not provided, the script will use the client's IP)

## Installation

Clone the repository:
```bash
git clone git@github.com:luismr/php-ip-check-script.git
cd php-ip-check-script
```

## Contributing

1. Fork the repository
2. Create your feature branch (`git checkout -b feature/amazing-feature`)
3. Commit your changes (`git commit -m 'Add some amazing feature'`)
4. Push to the branch (`git push origin feature/amazing-feature`)
5. Open a Pull Request

## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details. 