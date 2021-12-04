# Changelog

## [v1.33.0](https://github.com/symfony/maker-bundle/releases/tag/v1.33.0)

*June 30th, 2021*

### Feature

- [#895](https://github.com/symfony/maker-bundle/pull/895) - [make:crud] send the proper HTTP status codes and use renderForm() when available - *@dunglas*
- [#889](https://github.com/symfony/maker-bundle/pull/889) - [make:user] Use password_hashers instead of encoders - *@wouterj*

### Bug Fix

- [#913](https://github.com/symfony/maker-bundle/pull/913) - [make:registration] conditionally generate verify email flash in template - *@jrushlow*
- [#881](https://github.com/symfony/maker-bundle/pull/881) - [make:entity] Fix error when API-Platform is installed. - *@MichaelBrauner*

## [v1.32.0](https://github.com/symfony/maker-bundle/releases/tag/v1.32.0)

*June 18th, 2021*

### Feature

- [#877](https://github.com/symfony/maker-bundle/pull/877) - [make:entity] Default to "datetime_immutable" when creating entities - *@nicolas-grekas*

### Bug Fix

- [#899](https://github.com/symfony/maker-bundle/pull/899) - Use proper name for parameter of upgradePassword - *@Tobion*
- [#896](https://github.com/symfony/maker-bundle/pull/896) - Fix keys not found when surrounded by quotes - *@valentinloiseau*
- [#890](https://github.com/symfony/maker-bundle/pull/890) - [make:user] Keep implementing deprecated username methods - *@wouterj*

## [v1.31.1](https://github.com/symfony/maker-bundle/releases/tag/v1.31.1)

*May 12th, 2021*

### Security

- [security](https://github.com/symfony/maker-bundle/releases/tag/v1.31.1) - CVE-2021-21424 Prevent user enumeration - *@chalasr*

## [v1.31.0](https://github.com/symfony/maker-bundle/releases/tag/v1.31.0)

*May 5th, 2021*

### Feature

- [#864](https://github.com/symfony/maker-bundle/pull/864) - [make:command] template: add void return type to configure method - *@duboiss*
- [#862](https://github.com/symfony/maker-bundle/pull/862) - [make:user] implement getUserIdentifier if required - *@jrushlow*
- [#860](https://github.com/symfony/maker-bundle/pull/860) - Add support for Symfony UX Turbo - *@dunglas*
- [#859](https://github.com/symfony/maker-bundle/pull/859) - use attributes for API Platform when using PHP 8+ - *@dunglas*
- [#855](https://github.com/symfony/maker-bundle/pull/855) - [reset-password] allow anyone to access check email - *@jrushlow*
- [#853](https://github.com/symfony/maker-bundle/pull/853) - [make:voter] generate type hints - *@jrushlow*
- [#849](https://github.com/symfony/maker-bundle/pull/849) - [make:user] user entities implement PasswordAuthenticatedUserInterface - *@jrushlow*
- [#826](https://github.com/symfony/maker-bundle/pull/826) - Add autocomplete html tag to forms - *@duboiss*
- [#822](https://github.com/symfony/maker-bundle/pull/822) - [make:command] lets use attributes if possible - *@jrushlow*

### Bug Fix

- [#869](https://github.com/symfony/maker-bundle/pull/869) - [make:serializer:encoder] set public constant visibility modifier - *@jrushlow*
- [#818](https://github.com/symfony/maker-bundle/pull/818) - [MakeDocker] add support for .yml docker-compose files - *@jrushlow*

1.30
====

* [make:crud] Ask a new question - controller name - to allow that to
  be customized - #840 thanks to @weaverryan

* [make:crud] Make the delete form submit via a normal POST request
  instead of delete - #825 thanks to @jrushlow

* Dropped support for Symfony 3 - #819 thanks to @jrushlow

1.29
====

* [make:test] Added a new command that interactively asks you between
  several different styles of test classes. See #807 thanks to @dunglas.
* [make:unit-test] Deprecated the maker in favor of `make:test`.
* [make:functional-test] Deprecated the maker

1.28
====

* Sort entity auto-completion in various commands - thanks to @zorn-v

1.27
====

* [make:registration-form] Added a new question to generate code that will allow
  users to click on the "verify email" link in their email without needing to be
  authenticated - #776 thanks to @jrushlow!

1.26
====

* [make:auth] Added support to make:auth for the new "authenticator" security mode in
  Symfony 5.2 - #736 thanks to @jrushlow!

1.25
====

* Add support for doctrine/inflector v2 (v1 is still allowed) - #758 thanks to @jrushlow!
* [make:entity] Fixed setting a null value for OneToMany - #755 thanks to @Kocal!

1.24
====

* Use PHP 8 Route attributes when using PHP 8 - #725 thanks to @jrushlow!
* Improve version detection by reading config.platform.php - #728 thanks to @jrushlow!

1.23
====

* Added experimental PHP 8 support. The bundle now allows php 8 and all
  maker commands (whose dependencies allow PHP 8) now having passing tests.

1.22
====

* [make:entity] Optimized how the `removeXXXX()` methods are generated
  for relationships - #675 thanks to @mhabibi!

* [make:serializer:normalizer] Generated a better template, trying to
  guess the class you might be normalizing - #672 thanks to @BatsaxIV

1.21
====

* [make:docker:database] When using MySQL, a "main" database is now created
  automatically for you - #656 thanks to @robmeijer!

* [make:voter] Better generated entity "guess" - #658 thanks to @yahyaerturan!

* [make:command] Use the new Command::SUCCESS when available - #664
  thanks to @Chi-teck!


1.20
====

* [make:docker:database] Added a new command to generate a database service
  in your `docker-compose.yaml` file - #640 thanks to @jrushlow!

1.19
====

* Added "email verification/confirmation" option to `make:registration-form` - see #603
  thanks to @jrushlow!

1.18
====

* Reverted support for `doctrine/inflector` 2.0 - #611 thanks to @weaverryan

1.17
====

* PHP 7.1 is now the required minimum version - #598 thanks to @weaverryan

* MakerBundle now allows `doctrine/inflector` 2.0 - #600 thanks to @alcaeus

1.16
====

* [make:entity] Generated entities will now use the RelationName::class
  syntax when generating relationships (e.g.
  `targetEntity=RelationName::class`) - #573 thanks to @rogeriolino.

* When listing generated files in the console, if a file link formatter
  is configured, the links will now be clickable - #559 thanks to @l-vo.

* [make:entity] Added UUID and GUID default type to entity maker - if you name a
  field `uuid` or `guid`, the Maker will guess those types by default - #593
  thanks to @thomas-miceli.

1.15
====

* [make:reset-password] New `make:reset-password` to generate an
  entire "reset password" controller, forms, template setup - #567
  thanks to @jrushlow and @romaricdrigon

* [make:message] New `make:message` command to generate a
  Messenger messaage & handler class - #338 thanks to @nikophil

* [make:messenger-middleware] New `make:messenger-middleware`
  command to generate a middleware for Messenger

1.14
====

* Added support for Symfony 5

1.13
====

* [make:functional-test] Use Panther when available - #417
  thanks to @adrienlucas

* Allow rehashing passwords when possible and needed - #389
  thanks to @nicolas-grekas

1.12
====

* Use `[make:*-test]` Use the new WebTestAssertionsTrait methods in the generated
  functional tests - #381 thanks to @adrienlucas

* Add a agree terms checkbox to `make:registration-form` - #394
  thanks to @ismail1432

* Template generation respects `twig.default_path` - #346
  thanks to @LeJeanbono

* [Serializer] Normalizer now implements CacheableSupportsMethodInterface
  with condition - #399 thanks to @jojotjebaby

* Deprecate Argon2i encoder used in `make:user` and use
  `auto` instead - #398 thanks to @nicolas-grekas

* [make:auth] Added logout support and help for logged in user -
  in #406 thanks to @St0iK

* Use new event class names instead of strings in `make:event-subscriber` -
  in #403 thanks to @jojotjebaby

1.11
====

* Add `make:registration-form` command - #333 thanks to @weaverryan

1.10
====

* Add `make:serializer:normalizer` command - #298 thanks
    to @lyrixx

* Add a `--no-template` option to `make:controller` to skip
    generating a template - #280 thanks to @welcoMattic

* Add support for rendering additional date types in make:crud
    - #241 thanks to @sadikoff

* Better errors when trying to use reserved words for classes
    - #306 thanks to @SerkanYildiz

1.9
===

* Allow make:form to work with non-entities - #301 thanks to @ckrack

1.8
===

* make:auth can now generate an entire form login system with
  authenticator, login form and controller! #266 thanks to @nikophil

* make:auth now registers your guard authenticator in your security.yaml
  file automatically - #261 thanks to @nikophil

* Generate more explicit voter attribute names - #283 thanks to @lyrixx

* Fixing incorrect dependency for make:crud - #256 thanks to @ckrack

* Fix self-referencing relation issue - #278 thanks to @codedmonkey

* Fix edge-case bad template name in make:crud - #286 thanks
  to @thlbaut

1.7
===

* Added `make:user` command that generates a `User` class, generates
  a user provider (when needed) and configures your the `providers`
  and `encoders` section in your `security.yaml` file - #250 thanks
  to @weaverryan

* Properly extend `AbstractController` and use core `@Route` annotation
  in `make:crud` - #246 thanks to @royklutman 

* Fixed a bug when a class name contained the namespace `App\` - #243
  thanks to @gmanen

* Fix bug with `make:entity` when generating inside a sub-directory - #245
  thanks to @nikophil

1.6
===

* Fixing bad empty line when source file uses tabs - #238 thanks to @weaverryan

* Str case mismatch - #190 thanks to @localheinz

* Preserve existing class metadata - #197 thanks to @ro0NL

* Fixing a bug where having relativizePath failed - #214 thanks to @weaverryan

* Do not prefix Command Class Name by 'App' if the prefix is app: - #205 thanks to @lyrixx

* make:entity: Add return type to getId() - #215 thanks to @gharlan

* Don't make Twig filters safe for HTML by default - #222, #202 thanks to @lyrixx

* Remove support for the deprecated json_array Doctrine type - #224 thanks to @javiereguiluz

* Extend from AbstractController when using Symfony 4.1 or higher - #221 thanks to @javiereguiluz

* Don't use :contains in the functional test tpl - #226 thanks to @dunglas

1.5
===

* Before 1.5, the `App\` namespace prefix was always assumed so that
  when you type a short class name, it is converted into a full class
  name with this prefix. Now, this is configurable #173 thanks to @upyx

* Added an option to to `make:enity` to make your class automatically
  an ApiPlatform resource. Pass `--api-resource` #178 thanks to @dunglas

* Fixed `make:entity` when your class uses traits or a mapped
  super class #181 thanks to @andrewtch

* Improved messages when you need to pass a fully-qualified class
  name #188 & #171 - thanks to @sadikoff and @LeJeanbono

* Fixed a bug where `make:crud` would not render the correct form
  names when your property included an underscore.

1.4
===

* Removed our tests from the archive to avoid polluting the
  user's auto-completion of classes #147

* Fixed some minor bugs! #150 #145

1.3
===

* Drastically improved `make:entity` command, which now supports
  adding fields, relationships, updating existing entities, and
  generating (with the `--regenerate` flag) missing
  properties/getters/setters (effectively replaces `doctrine:generate:entities`)
  - thanks to @weaverryan in #104

1.2
===

* New maker command! `make:crud` - thanks to @sadikoff in #113.

* Greatly improved `make:form` command that auto-adds fields if
  your form is bound to an entity class - thanks to @sadikoff in #113.

1.1
===

* [BC BREAK] The MakerInterface changed: `getParameters()`, `getFiles()`
  and `writeNextStepsMessage()` were removed and `generate()` was added
  in their place. We recommend extending `AbstractMaker` instead of implementing
  the interface directly, and use `$this->writeSuccessMessage()` to get
  the normal "success" message after the command #120 via @weaverryan

* Added new `make:migration` command, which wraps the normal
  `doctrine:migrations:diff` command #97 via @weaverryan

* Added new `make:fixtures` command to generate an empty fixtures class
  #105 via @javiereguiluz

* Added PHPDoc to generated entity repositories so that your IDE knows
  what type of objects are returned #116 @enleur

* Allowed generation of all classes into sub-namespaces #120 via @weaverryan