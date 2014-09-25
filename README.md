[Pimp My TYPO3]
===============

**“Yo dawg i heard you liked TYPO3...”**

Usage
-----

1. Install extension

2. Add the following snippet to your page TSConfig:

    ```
    TCAdefaults {
      pages {
        # Set author and email automatically
        author := author(realName)
        author_email := author(email)
      }

      tt_news {
        # Set author and email automatically
        author := author(realName)
        author_email := author(email)
      }
    }
    ```

License
-------

Pimp My TYPO3 is released under the [MIT License (MIT)], see [LICENSE].

[LICENSE]: https://raw.githubusercontent.com/bitaculous/pimp_my_typo3/master/LICENSE "License"
[MIT License (MIT)]: http://opensource.org/licenses/MIT "The MIT License (MIT)"
[Pimp My TYPO3]: http://bitaculous.github.io/pimp_my_typo3 "“Yo dawg i heard you liked TYPO3...”"