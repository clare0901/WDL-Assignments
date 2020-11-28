<?xml version = "1.0" encoding = "UTF-8"?>  
<xsl:stylesheet version = "1.0"  
 xmlns:xsl = "http://www.w3.org/1999/XSL/Transform"> 
 <xsl:template match = "/">  
 <html>  
 <body>  
 <h1>Employee Details</h1>  
 <table border = "1">  
 <tr>  
 <th>Empid</th>  
 <th>Fname</th> 
 <th>Lname</th> 
 <th>Salary</th>  
 <th>DOJ</th>  
 <th>Department</th> 
 <th>Designation</th> 
 <th>DOB</th> 
 <th>Address</th>  
 </tr>  
 <xsl:for-each select="document/employee">  
 <tr>  
 <td><xsl:value-of select="empid"/></td>  
 <td><xsl:value-of select="empname/fname"/></td>  
 <td><xsl:value-of select="empname/lname"/></td>  
 <td><xsl:value-of select="salary"/></td>  
 <td><xsl:value-of select="doj"/></td>  
 <td><xsl:value-of select="deptname"/></td>  
 <td><xsl:value-of select="designation"/></td>  
 <td><xsl:value-of select="dob"/></td>  
 <td><xsl:value-of select="address"/></td>  
 </tr>  
 </xsl:for-each> 
 </table>  
</body>  
</html>  
</xsl:template>  
</xsl:stylesheet> 
