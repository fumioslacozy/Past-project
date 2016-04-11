using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Windows.Forms;

namespace WindowsFormsApplication1
{
    public partial class LoginForm : Form
    {
        BookShopDataContext dtBS = new BookShopDataContext();
        MsEmployee employee = new MsEmployee();

        public LoginForm()
        {
            InitializeComponent();
        }

        private void LoginForm_Load(object sender, EventArgs e)
        {

        }

        private void butLogin_Click(object sender, EventArgs e)
        {
            if (boxEmail.Text == "")
            {
                MessageBox.Show("Username must be filled !");
            }
            else if (boxPassword.Text == "")
            {
                MessageBox.Show("Password must be filled !");
            }
            else if (boxEmail.Text == "admin" && boxPassword.Text == "admin")
            {
                MDIForm.flag = 1;
                MessageBox.Show("Login success !");
                BuyBookForm.id = "EM001"; //lempar id ke buybook untuk EmployeeID
                this.Dispose();
            }
            else
            {
                var query = from x in dtBS.MsEmployees where x.EmployeeID == boxEmail.Text select x;
                if (query.Count() == 0)
                {
                    MessageBox.Show("Wrong Email and Password combination !");
                }
                else
                {
                    var query1 = (from x in dtBS.MsEmployees where x.EmployeeID == boxEmail.Text select x).First();
                    if (query1.EmployeeID == boxEmail.Text && query1.Password == boxPassword.Text)
                    {
                        MDIForm.flag = 2; //lempar ke flag MDI untuk validasi employee atau admin
                        BuyBookForm.id = query1.EmployeeID; //lempar id ke buybook untuk EmployeeID
                        MessageBox.Show("Login success !");
                        this.Dispose();
                    }
                    else
                    {
                        MessageBox.Show("Wrong Email and Password combination !");
                    }
                }


            }
        }

        private void butCancel_Click(object sender, EventArgs e)
        {
            this.Hide();
        }
    }
}
