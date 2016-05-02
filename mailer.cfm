<cfsetting  requestTimeOut = "100000000000000000">
<cfparam name="form.message" default="">
<cfparam name="form.isBulkMail" default="0">
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Mail</title>
    <style type="text/css">
    	 body {
	font-size: 13px;
	width: 100%;
	height: 100%;
	margin: 0px;
	color: #666666;
	padding: 0;
	background: url(header_bg.png) repeat #f4ebd9;
}
		.content{margin: 0 auto;padding: 0px;width:1000px;border:#000000 solid 0px;}	
		 legend {font-size:20px; font-weight:bold; color:#333;}	
		.inputsmall { width:300px; padding:1px; height:22px;  border:1px solid #999;}
		.inputbig  { width:460px; padding:1px; height:22px;}
		.inputtxtarea  {width:300px;padding:1px; height:170px;  border:1px solid #999;}
		.inputtxtarea_msg {width:790px;padding:1px; height:300px;  border:1px solid #999;}
		.submitbtn{ background: rgb(238,238,238); /* Old browsers */
			background: -moz-linear-gradient(top, rgba(238,238,238,1) 0%, rgba(204,204,204,1) 100%); /* FF3.6+ */
			background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(238,238,238,1)), color-stop(100%,rgba(204,204,204,1))); /* Chrome,Safari4+ */
			background: -webkit-linear-gradient(top, rgba(238,238,238,1) 0%,rgba(204,204,204,1) 100%); /* Chrome10+,Safari5.1+ */
			background: -o-linear-gradient(top, rgba(238,238,238,1) 0%,rgba(204,204,204,1) 100%); /* Opera 11.10+ */
			background: -ms-linear-gradient(top, rgba(238,238,238,1) 0%,rgba(204,204,204,1) 100%); /* IE10+ */
			background: linear-gradient(to bottom, rgba(238,238,238,1) 0%,rgba(204,204,204,1) 100%); /* W3C */
			filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#eeeeee', endColorstr='#cccccc',GradientType=0 ); /* IE6-9 */	
			border-color: #ACACAC #ACACAC #ACACAC;
			border-radius: 5px 5px 5px 5px;
			border-style: solid;
			border-width: 1px;
			box-shadow:0px 4px 2px #BCBCBC inset;
			color: #000000;
			cursor: pointer;
			font-weight: bold;
			height:38px;
			text-align: center;
			text-shadow:0 -1px #ACACAC;
			width:130px;
			font-size:14px;
		}

    .form {	font-family: Arial, Helvetica, sans-serif;
	font-size: 10px;
	color: #333333;
	background-color: #FFFFFF;
	border: 1px dashed #666666;
}
    .submitbtn1 {background: rgb(238,238,238); /* Old browsers */
			background: -moz-linear-gradient(top, rgba(238,238,238,1) 0%, rgba(204,204,204,1) 100%); /* FF3.6+ */
			background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(238,238,238,1)), color-stop(100%,rgba(204,204,204,1))); /* Chrome,Safari4+ */
			background: -webkit-linear-gradient(top, rgba(238,238,238,1) 0%,rgba(204,204,204,1) 100%); /* Chrome10+,Safari5.1+ */
			background: -o-linear-gradient(top, rgba(238,238,238,1) 0%,rgba(204,204,204,1) 100%); /* Opera 11.10+ */
			background: -ms-linear-gradient(top, rgba(238,238,238,1) 0%,rgba(204,204,204,1) 100%); /* IE10+ */
			background: linear-gradient(to bottom, rgba(238,238,238,1) 0%,rgba(204,204,204,1) 100%); /* W3C */
			filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#eeeeee', endColorstr='#cccccc',GradientType=0 ); /* IE6-9 */	
			border-color: #ACACAC #ACACAC #ACACAC;
			border-radius: 5px 5px 5px 5px;
			border-style: solid;
			border-width: 1px;
			box-shadow:0px 4px 2px #BCBCBC inset;
			color: #000000;
			cursor: pointer;
			font-weight: bold;
			height:38px;
			text-align: center;
			text-shadow:0 -1px #ACACAC;
			width:130px;
			font-size:14px;
}
    </style>
	<script type="text/javascript">
         function addRow(tableID) 
         {
                var frmobj = window.document.frm_mail;
                var currentAttachement = parseFloat(frmobj.attachmentCount.value) + 1;
                var inputfieldname = 'attachment_' +currentAttachement;
                var table = document.getElementById(tableID);
                var rowCount = table.rows.length;
                var row = table.insertRow(rowCount-3);
                
                var cell1 = row.insertCell(0);
                cell1.innerHTML = 'Attachment #'+currentAttachement;
                     
                var cell2 = row.insertCell(1);
                var element1 = document.createElement("input");
                element1.type = "file";
                element1.name=inputfieldname;
                cell2.appendChild(element1);
                frmobj.attachmentCount.value=currentAttachement;
         }
     </script>    
</head>
<cfoutput>

     <body>
     
     	<div class="content" style="margin-top:20px;">
			<cfif IsDefined("form.send_email")>
            <cfset attachmentlist = ''>
            <cfset variables.folderpath = "#ExpandPath('./')#">
                <cfloop from="1" to="#form.attachmentCount#" index="i">
                    <cfif #evaluate('form.attachment_'&i)# neq "">
                           <cffile action="upload"
                                     filefield="form.attachment_#i#"
                                     destination="#variables.folderpath#"
                                     nameconflict="Makeunique">
                            <cfset acceptedFileExtensions = "jpg,jpeg,gif,png,doc,txt"/>
                            <cfset filecheck = listFindNoCase(acceptedFileExtensions,cfFile.ServerFileExt)/>
                            <cfset Variables.FileName=cfFile.ServerFile>
                            <cfset Variables.ServerFileName=cfFile.ServerFile> 
                            <cfset attachmentlist = ListAppend(attachmentlist,'#variables.folderpath##Variables.ServerFileName#','|')>
                    </cfif>
                </cfloop>
                <cfif form.isBulkMail EQ 0>
                	<cfset variables.totalcount = 0>
                    <cfloop list="#form.emaillist#" delimiters="#Chr(13)#" index="lc">
                        <cftry>
                            <CFMAIL 
                                FROM="#form.realname# <#form.from#>" 
                                TO="#lc#" 
                                SUBJECT="#form.Subject#" 
                                type="HTML">
                                <CFIF Trim(attachmentlist) NEQ "">					
                                    <CFLOOP LIST="#attachmentlist#" DELIMITERS="|" INDEX="attach">
                                        <CFIF fileExists(attach)>
                                            <CFMAILPARAM FILE="#attach#">
                                        </CFIF>
                                    </CFLOOP>					
                                </CFIF>	
                               
                                #form.message#
                            </CFMAIL>
                        <cfcatch>
                            <cfset flag=0>
                        </cfcatch>
                        </cftry>
                        <cfset variables.totalcount = #Evaluate(variables.totalcount + 1)#>
                    </cfloop>	
                  <!---  #variables.totalcount#--->
                <cfelse> 
                    <cftry>
                        <CFMAIL 
                            FROM="#form.realname# <#form.from#>" 
                            TO="#ListChangeDelims(form.emaillist,',','#chr(13)#')#" 
                            SUBJECT="#form.Subject#" 
                            type="HTML">
                            <CFIF Trim(attachmentlist) NEQ "">					
                                    <CFLOOP LIST="#attachmentlist#" DELIMITERS="|" INDEX="attach">
                                        <CFIF fileExists(attach)>
                                            <CFMAILPARAM FILE="#attach#">
                                        </CFIF>
                                    </CFLOOP>					
                          </CFIF>				
                            #Arguments.Content#
                        </CFMAIL>
                        <cfcatch>
                            <cfset flag=0>
                        </cfcatch>
                    </cftry>
                </cfif>
                 <h2 align="center">Mail Sent Successfully</h2> 

            </cfif>
        
         <cfform action="" name="frm_mail" method="post" enctype="multipart/form-data">
         	<cfinput type="hidden" name="attachmentCount" value="1">
          <fieldset style="background-color:##eae7d8;">
          <legend>New Message</legend>  
          <table width="100%" border="0" cellpadding="5" id="dataTable">
            	<tr>
                	<td>&nbsp;</td>
                </tr>
            	<tr>
                    <td width="15%" ><strong>From Email</strong>:</td>
                    <td width="35%"><cfinput type="text" name="from" value="" required="yes" validate="email" class="inputsmall" message="Please enter your email." ></td>
                    <td width="15%"><strong>Your Name</strong>:</td>
                    <td width="35%"><cfinput type="text" name="realname" value="" required="yes" class="inputsmall" message="Please enter your name." ></td>
               </tr>
              <tr>
              	  <td>&nbsp;</td>
              	  <td valign="top"><p>
           	        <cfinput type="radio" name="isBulkMail" id="isBulkMail" value="1"> 
       	          Send in Bulk <cfinput type="radio" name="isBulkMail" id="isBulkMail" value="0" checked="yes"> Send seperately</p>
           	      <p><span style="color: ##000">
           	        <input name="replyto" type="text" class="form" id="realname0" style="width:48%" value="<?php print $replyto; ?>" size="1" />
           	      </span></p></td>
                  <td valign="top"><p><strong>To</strong>:</p>
                  <p>&nbsp;</p></td>
                  <td rowspan="4"><cftextarea name="emaillist" class="inputtxtarea" required="yes" message="Please enter recipient email." ></cftextarea>
                  <p>
                    <cfinput type="submit" name="send_email" value="Send Email">
                  </p></td>
                 
              </tr>
              
              <tr>
                  <td  valign="top"><strong>Subject</strong>:</td>
                  <td colspan="2"  valign="top"><p>
                    <cfinput type="text" name="subject" value="" required="yes" class="inputsmall" message="Please enter subject." >
                  </p>
                  <p>
                    <textarea name="message" style="width:100%" rows="8" wrap="virtual" class="form" id="html" cols="1"></textarea>
                  </p></td>
              </tr>
              <tr>
                  <td valign="top"><strong>Attachment ##1</strong>:</td>
                  <td colspan="2" valign="top"><cfinput type="file" name="attachment_1" value=""> &nbsp;&nbsp;<a href="javascript:addRow('dataTable')" style="color:##333;">Add More</a></td>
              </tr>
              <tr>
                <td colspan="4">&nbsp;<cfinput type="hidden"  name="mailType" value="1">
                <cfinput type="submit" name="send_email" value="Send Email"></td>
              </tr>
             <tr>
                  <td  valign="top"><strong>Message:</strong></td>
                  <td colspan="3" >
                  	<div id="htmltype">
				    <script type="text/javascript">
                            var oFCKeditor = new FCKeditor( 'message' ) ;
                            oFCKeditor.BasePath = "components/fckeditor/";
                            oFCKeditor.Height="300";
							oFCKeditor.Width="795";
                            oFCKeditor.Value=""
                            oFCKeditor.Create() ;
                        </script></div>
                  </td>
            </tr>
              <tr>
                  <td colspan="4" align="center"><br></td>
              </tr>
          </table>
          <cfif IsDefined("form.send_email")>
                <cfloop list="#form.emaillist#" delimiters="#Chr(13)#" index="lc">
                	<cfif len(lc) gt 1><p>Sending mail to <strong>#lc#</strong>..............<span style="color:##060;font-weight:bold;">Sent</span></p>
                	</cfif>
                </cfloop>
            </cfif>
          </fieldset>
			
         </cfform>
       </div>  
  </body>
</cfoutput>     
</html>