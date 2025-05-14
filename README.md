# trellis-newrelic-php (Updated)

This Trellis role installs and configures the New Relic PHP Agent via the New Relic CLI.

## Requirements

- Trellis with Ubuntu 20.04 or 22.04
- PHP 8.0, 8.1, or later
- New Relic Account ID and API Key (used for CLI installer)

## Installation

1. Add this role to your `requirements.yml`:

```yaml
- src: git@github.com:your-org/trellis-newrelic-php.git
  name: trellis-newrelic-php
```

2. Include the role in `server.yml` **after `php`**:

```yaml
- { role: trellis-newrelic-php }
```

3. In your group_vars (`group_vars/production/main.yml` or similar):

```yaml
newrelic_license_key: "YOUR_LICENSE_KEY"
newrelic_account_id: "YOUR_ACCOUNT_ID"
newrelic_app_name: "{{ site_hosts[0] }}"
```

## Notes

This role uses the official New Relic install script:
https://docs.newrelic.com/docs/infrastructure/install-infrastructure-agent/linux-installation/install-infrastructure-monitoring-agent-linux/
