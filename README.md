# Widont Twig Filter for Craft

Provides a `widont` filter in your [Craft](http://buildwithcraft.com) templates.

## Installation

Drop the `windontextension` directory into `craft/plugins`, and install from the CP.

## Usage

`{{ entry.title | widont | raw }}`

## Caveat developer

Craft runs Twig with `autoescape` on, so as the `widont` filter replaces the last not trailing space in the filtered string with an HTML entity for a non-breaking space, so you will probably then want to pass its output to the `raw` filter.

This is a bad idea for untrusted input.
