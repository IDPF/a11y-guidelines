# EPUB 3 Accessibility Guidelines

This repository contains the source pages for the [EPUB 3 Accessibility Guidelines](http://www.idpf.org/accessibility/guidelines/).

## Contributing

Contributions to this project are welcome. You can:

- Report bugs in the [issue tracker](issues/);
- Create a branch of this repository, update the source and create a [pull request](pulls/).

## Updating the Site

### Revision History

A list of revisions to the site is maintained in the /guidelines/rev/history.xml file. Update this file whenever modifications are made to the site, as it is the permanent record of changes.

New updates are added by including a new date element, like the following

```XML
<date date="2015-10-12">
	<doc docid="xhtm065">
		<rev>Deleted <code>aria-describedat</code> as it has been removed from ARIA 1.1.</rev>
	</doc>
</date>
```

The date of the change is included in the date attribute and the docid value is found at the top of the modified page. Include a short description of the change in the rev element.

### Building the EPUB

The web site is also designed to be easily converted into an EPUB Publication for download. To generate the download file, follow these steps. You'll need a working copy of Perl 5 (with the XML::LibXSLT module) and the latest [epubcheck](https://github.com/IDPF/epubcheck/).

1. Copy the source files in the /guidelines directory to /build/html/EPUB
2. Run the createEPUB.pl script in /build/html
3. After the script finishes, copy the /build/html/EPUB folder to /build/epub3-accessiblity-guidelines
4. Run epubcheck with the -save option to generate the packaged file
5. Copy the generate EPUB file to the /guidelines/book directory
6. Create a dated copy of the file for backup purposes (add -yyyymmdd to the file name)
7. Update the last updated date in /guidelines/includes/footer.php to the current date
