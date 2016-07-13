<?xml version="1.0" encoding="utf-8"?>
<xsl:stylesheet
	xmlns:xsl="http://www.w3.org/1999/XSL/Transform"
	xmlns="http://www.w3.org/1999/xhtml"
	version="1.0">
	
	<xsl:param name="id"/>
	<xsl:param name="xmlPath"/>
	
	<xsl:variable name="spine" select="document(concat('file:///',$xmlPath))"/>
	
	<xsl:output method="xml" encoding="UTF-8" indent="yes" omit-xml-declaration="yes" />
	
	<xsl:template match="revisions">
		<xsl:if test="date/doc[@docid=$id] or $id='rev'">
			<xsl:element name="dl">
				<xsl:attribute name="class">revhistory</xsl:attribute>
				<xsl:for-each select="date">
					<xsl:choose>
						<xsl:when test="$id='rev'">
							<xsl:element name="dt">
								<xsl:value-of select="./@date"/>
							</xsl:element>
							<xsl:element name="dd">
								<xsl:for-each select="doc">
									<xsl:element name="p">
										<xsl:attribute name="class">page</xsl:attribute>
										<xsl:choose>
											<xsl:when test="@docid='site'">
												<xsl:text>Site Change</xsl:text>
											</xsl:when>
											<xsl:otherwise>
												<xsl:element name="a">
													<xsl:attribute name="href">
														<xsl:text>../content/</xsl:text><xsl:value-of select="$spine//itemref[@idref=current()/@docid]/@href"/>
													</xsl:attribute>
													<xsl:value-of select="$spine//itemref[@idref=current()/@docid]"/>
												</xsl:element>
											</xsl:otherwise>
										</xsl:choose>
									</xsl:element>
									<xsl:call-template name="addRevisions">
										<xsl:with-param name="doc" select="."/>
									</xsl:call-template>
								</xsl:for-each>
							</xsl:element>
						</xsl:when>
						<xsl:when test="doc[@docid=$id]">
							<xsl:element name="dt">
								<xsl:value-of select="@date"/>
							</xsl:element>
							<xsl:element name="dd">
								<xsl:call-template name="addRevisions">
									<xsl:with-param name="doc" select="doc[@docid=$id]"></xsl:with-param>
								</xsl:call-template>
							</xsl:element>
						</xsl:when>
					</xsl:choose>
				</xsl:for-each>
			</xsl:element>
		</xsl:if>
	</xsl:template>
	
	<xsl:template name="addRevisions">
		<xsl:param name="doc"/>
		<xsl:element name="ul">
			<xsl:for-each select="$doc/rev">
				<xsl:element name="li">
					<xsl:apply-templates select="./node()"/>
				</xsl:element>
			</xsl:for-each>
		</xsl:element>
	</xsl:template>
	
	<xsl:template match="*">
		<xsl:element name="{local-name(.)}" namespace="http://www.w3.org/1999/xhtml">
			<xsl:apply-templates/>
		</xsl:element>
	</xsl:template>
	
</xsl:stylesheet>