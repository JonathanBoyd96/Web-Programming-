<%@ Page Language="C#" AutoEventWireup="true" CodeBehind="Default.aspx.cs" Inherits="WPApplication.Default" %>



<!DOCTYPE html>



<html xmlns="http://www.w3.org/1999/xhtml">

<head runat="server">

    <title></title>

</head>

<body>

    <form id="form1" runat="server">

    <div>

        <asp:Label ID="Label4" runat="server" Text="Output"></asp:Label>

        <br />

        <br />

        <asp:Label ID="Label1" runat="server" Text="First Name:"></asp:Label>

&nbsp;

        <asp:TextBox ID="TextBox1" runat="server"></asp:TextBox>

        <asp:RequiredFieldValidator ID="RequiredFieldValidator1" runat="server" ErrorMessage="First name is required" ControlToValidate="TextBox1" ForeColor="Red"></asp:RequiredFieldValidator>

        <br />

        <asp:Label ID="Label2" runat="server" Text="Last Name:"></asp:Label>

&nbsp;

        <asp:TextBox ID="TextBox2" runat="server"></asp:TextBox>

        <asp:RequiredFieldValidator ID="RequiredFieldValidator2" runat="server" ErrorMessage="Last name is required" ControlToValidate="TextBox2" ForeColor="Red"></asp:RequiredFieldValidator>

        <p>Age:</p>

        <asp:DropDownList ID="DropDownList1" runat="server" >

            <asp:ListItem></asp:ListItem>

            <asp:ListItem Text="Child">Child</asp:ListItem>

            <asp:ListItem Text="Adult">Adult</asp:ListItem>

            <asp:ListItem Text="Senior">Senior</asp:ListItem>

        </asp:DropDownList>

        &nbsp;

        <asp:RequiredFieldValidator ID="RequiredFieldValidator3" runat="server" ErrorMessage="Age is required" ControlToValidate="DropDownList1" ForeColor="Red"></asp:RequiredFieldValidator>

        <br />

        <p>Gender</p>

        <asp:RadioButtonList ID="RadioButtonList1" runat="server">

            <asp:ListItem>Male</asp:ListItem>

            <asp:ListItem>Female</asp:ListItem>

        </asp:RadioButtonList>

        <asp:RequiredFieldValidator ID="RequiredFieldValidator4" runat="server" ErrorMessage="Gender is required" ControlToValidate="RadioButtonList1" ForeColor="Red"></asp:RequiredFieldValidator>

        

            <p>Select a feature:</p>

            <asp:CheckBoxList ID="CheckBoxList1" runat="server">

            <asp:ListItem text="Cool">Cool</asp:ListItem>

            <asp:ListItem text="Attractive">Attractive</asp:ListItem>

            <asp:ListItem text="Intelligent">Intelligent</asp:ListItem>

        </asp:CheckBoxList>

        

        <p>

        <asp:Button ID="Button1" runat="server" Text="Submit" OnClick="Button1_Click" />

        </p>

        </div>





        <asp:GridView ID="DatabaseInformation" runat="server" DataSourceID="DataSource">



        </asp:GridView>

        <asp:SqlDataSource ID="DataSource" runat="server" ConnectionString="<%$ ConnectionStrings:MicrosoftSQL %>" SelectCommand="SELECT * FROM [csharp] ORDER BY [input2], [input1], [input3], [input4], [input5]"></asp:SqlDataSource>





    </form>

</body>

</html>

