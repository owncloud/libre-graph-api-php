# AGENTS.md -- Libre Graph API PHP Client

## Repository Overview

Auto-generated PHP client library for the Libre Graph API. Licensed under Apache-2.0. Requires PHP 8.1+. Installed via Composer.

## Architecture & Key Paths

- `src/` -- Generated PHP API client and model classes
- `tests/` -- Generated test stubs
- `docs/` -- Generated documentation
- `composer.json` -- Composer package definition
- `phpunit.xml.dist` -- PHPUnit configuration

## Development Conventions

- Generated code -- do not edit directly
- Composer-based dependency management
- PSR-4 autoloading

## Build & Test Commands

```bash
composer install
./vendor/bin/phpunit
```

## Important Constraints

- Licensed under Apache-2.0 (already at the OSPO target license). The broader ownCloud organization is migrating other repositories from copyleft licenses to Apache 2.0.
- This is generated code. Changes should be made in the libre-graph-api spec, not here.
- All contributions require a DCO sign-off.


## OSPO Policy Constraints

### GitHub Actions
- **Only** use actions owned by `owncloud`, created by GitHub (`actions/*`), verified on the GitHub Marketplace, or verified by the ownCloud Maintainers.
- Pin all actions to their full commit SHA (not tags): `uses: actions/checkout@<SHA> # vX.Y.Z`
- Never introduce actions from unverified third parties.

### Dependency Management
- Dependabot is configured for automated dependency updates.
- Review and merge Dependabot PRs as part of regular maintenance.
- Do not introduce new dependencies without discussion in an issue first.

### Git Workflow
- **Rebase policy**: Always rebase; never create merge commits. Use `git pull --rebase` and `git rebase` before pushing.
- **Signed commits**: All commits **must** be PGP/GPG signed (`git commit -S -s`).
- **DCO sign-off**: Every commit needs a `Signed-off-by` line (`git commit -s`).
- **Conventional Commits & Squash Merge**: Use the [Conventional Commits](https://www.conventionalcommits.org/) format where the repository enforces it. Many repos use squash merge, where the PR title becomes the commit message on the default branch — apply Conventional Commits format to PR titles as well. A reusable GitHub Actions workflow enforces this.

## Context for AI Agents

All classes under `src/` are auto-generated from the OpenAPI spec. This package is a dependency of ocis-php-sdk. Modifications require updating the OpenAPI spec and regenerating.
