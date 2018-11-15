using System;

using System.Collections.Generic;

using System.Configuration;

using System.Data.SqlClient;

using System.Linq;

using System.Web;

using System.Web.UI;

using System.Web.UI.WebControls;



namespace WPApplication

{

    public partial class Default : System.Web.UI.Page

    {

        protected void Page_Load(object sender, EventArgs e)

        {



        }



        protected void Button1_Click(object sender, EventArgs e)

        {

            if (Page.IsValid)

            {

                

                SqlConnection conn = new SqlConnection(ConfigurationManager.ConnectionStrings["MicrosoftSQL"].ConnectionString);

                try

                {

                    conn.Open();

                    SqlCommand cmd = conn.CreateCommand();

                    cmd.CommandText = "INSERT INTO csharp(input1, input2, input3, input4, input5) VALUES('" + TextBox1.Text + "', '" + TextBox2.Text + "', '" + DropDownList1.Text + "', '"+ RadioButtonList1.Text +"', '" + CheckBoxList1.Text + "')";

                    try

                    {

                        cmd.ExecuteNonQuery();

                        Label4.Text = "Insert Success";

                        DatabaseInformation.DataBind();

                    }

                    catch (Exception ex2)

                    {

                        Label4.Text = "Failed insert:" + ex2.Message;

                    }

                    conn.Close();

                    conn.Dispose();

                }

                catch (Exception ex)

                {

                    Label4.Text = "Failed to connect:" + ex.Message;

                }

            }

        }

    }

}