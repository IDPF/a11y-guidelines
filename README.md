# EPUB 3 Accessibility Guidelines

This repository contains the source pages for the [EPUB 3 Accessibility Guidelines](http://www.idpf.org/accessibility/guidelines/).

## Contributing

Contributions to this project are welcome. You can:

- Report bugs in the [issue tracker](issues/);
- Create a branch of this repository, update the source and create a [pull request](pulls/).

## Updating the Site

### Building the EPUB

The web site is also designed to be easily converted into an EPUB Publication for download. To generate the download file, follow these steps. You'll need a working copy of Perl 5 (with the XML::LibXSLT module) and the latest [epubcheck](https://github.com/IDPF/epubcheck/).

1. Copy the source files in the /guidelines directory to /build/html/EPUB
2. Run the createEPUB.pl script in /build/html
3. After the script finishes, copy the /build/html/EPUB folder to /build/epub3-accessiblity-guidelines
4. Run epubcheck with the -save option to generate the packaged file (use the -e flag to suppress warnings about file extensions)
5. Copy the generate EPUB file to the /guidelines/book directory
