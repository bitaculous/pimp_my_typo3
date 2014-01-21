[PIMP MY TYPO3](https://github.com/bitaculous/pimp_my_typo3 "Pimp My TYPO3")
============================================================================

**Yo dawg i heard you liked TYPO3...**

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

Pimp My TYPO3 is released under the MIT License.