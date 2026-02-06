# Gilded Rose Kata – Solution

This repository contains my solution to the **Gilded Rose Kata**, a classic refactoring exercise focused on improving legacy code while preserving existing behavior.

## What is the Gilded Rose Kata?

The Gilded Rose Kata was created by Terry Hughes.  
It starts with a legacy codebase that manages item quality and sell-by dates in a shop.

The rules are intentionally awkward, and the original code is difficult to change.  
The main challenge is to **add new behavior without breaking existing logic**, while gradually improving code structure and readability.

This kata is commonly used to practice:

- Safe refactoring of legacy code
- Working with existing tests (or adding tests first)
- Incremental design improvements
- Writing clean, maintainable code

## Requirements

Official references for the kata:

- Main repository:  
  https://github.com/emilybache/GildedRose-Refactoring-Kata

- Requirements specification:  
  https://github.com/emilybache/GildedRose-Refactoring-Kata/blob/main/GildedRoseRequirements.md

- Original PHP base code:  
  https://github.com/emilybache/GildedRose-Refactoring-Kata/tree/main/php

## My Approach

- Studied the official requirements and existing behavior
- Ensured all original rules were covered by tests
- Refactored incrementally while keeping behavior unchanged
- Focused on readability, small methods, and clear responsibilities
- Avoided large rewrites in favor of controlled, step-by-step improvements
- Applied the **Strategy design pattern** to handle item-specific behavior

## Code

- My solution:  
  https://github.com/tapasdatta/gildedrosekata-php/blob/master/src/GildedRose.php

## Test Results

All tests pass after refactoring and implementing the required behavior.

![All tests passing](./tests-passed.png)

> Screenshot shows successful execution of the full test suite.

## Notes

This kata reinforced the importance of tests as a safety net for refactoring.  
It also shows how small, consistent improvements can significantly improve the quality of legacy code over time.
