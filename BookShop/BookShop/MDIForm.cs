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
    public partial class MDIForm : Form
    {
        public MDIForm()
        {
            InitializeComponent();
        }

        private void MainForm_Load(object sender, EventArgs e)
        {

        }

        public static int flag = 0;

        private void menuExit_Click(object sender, EventArgs e)
        {
            Application.Exit();
        }

        private void timer_Tick(object sender, EventArgs e)
        {
            if (flag == 0) //belum login
            {
                menuLogin.Enabled = true;
                menuLogout.Enabled = false;

                menuMaster.Visible = false;
                menuTransaction.Visible = false;

                menuLogout.Enabled = false;
            }
            else if (flag == 1) //login as admin
            {
                menuLogin.Enabled = false;
                menuLogout.Enabled = true;

                menuMaster.Visible = true;

                menuTransaction.Visible = true;
                menuBuyBook.Visible = true;
                menuViewTransaction.Visible = true;
            }
            else if (flag == 2) //login as employee
            {
                menuLogin.Enabled = false;
                menuLogout.Enabled = true;

                menuMaster.Visible = true;
                menuMasterEmployee.Visible = false;

                menuTransaction.Visible = true;
                menuBuyBook.Visible = true;
                menuViewTransaction.Visible = false;
            }
        }

        private void menuLogin_Click(object sender, EventArgs e)
        {
            LoginForm login = new LoginForm();
            login.MdiParent = this;
            login.Show();
        }

        private void menuMasterEmployee_Click(object sender, EventArgs e)
        {
            MsEmployeeForm msemployee = new MsEmployeeForm();
            msemployee.MdiParent = this;
            msemployee.Show();
        }

        private void menuMasterBookType_Click(object sender, EventArgs e)
        {
            MsBookTypeForm msbooktype = new MsBookTypeForm();
            msbooktype.MdiParent = this;
            msbooktype.Show();
        }

        private void menuMasterBook_Click(object sender, EventArgs e)
        {
            MsBookForm msbook = new MsBookForm();
            msbook.MdiParent = this;
            msbook.Show();
        }

        private void menuBuyBook_Click(object sender, EventArgs e)
        {
            BuyBookForm buybook = new BuyBookForm();
            buybook.MdiParent = this;
            buybook.Show();
        }

        private void menuViewTransaction_Click(object sender, EventArgs e)
        {
            ViewTransactionForm viewtransaction = new ViewTransactionForm();
            viewtransaction.MdiParent = this;
            viewtransaction.Show();
        }

        private void menuLogout_Click(object sender, EventArgs e)
        {
            MDIForm.flag = 0;
        }







    }
}
