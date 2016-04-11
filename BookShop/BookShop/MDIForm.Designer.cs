namespace WindowsFormsApplication1
{
    partial class MDIForm
    {
        /// <summary>
        /// Required designer variable.
        /// </summary>
        private System.ComponentModel.IContainer components = null;

        /// <summary>
        /// Clean up any resources being used.
        /// </summary>
        /// <param name="disposing">true if managed resources should be disposed; otherwise, false.</param>
        protected override void Dispose(bool disposing)
        {
            if (disposing && (components != null))
            {
                components.Dispose();
            }
            base.Dispose(disposing);
        }

        #region Windows Form Designer generated code

        /// <summary>
        /// Required method for Designer support - do not modify
        /// the contents of this method with the code editor.
        /// </summary>
        private void InitializeComponent()
        {
            this.components = new System.ComponentModel.Container();
            this.menuStrip = new System.Windows.Forms.MenuStrip();
            this.menuHome = new System.Windows.Forms.ToolStripMenuItem();
            this.menuLogin = new System.Windows.Forms.ToolStripMenuItem();
            this.menuLogout = new System.Windows.Forms.ToolStripMenuItem();
            this.menuExit = new System.Windows.Forms.ToolStripMenuItem();
            this.menuMaster = new System.Windows.Forms.ToolStripMenuItem();
            this.menuMasterEmployee = new System.Windows.Forms.ToolStripMenuItem();
            this.menuMasterBookType = new System.Windows.Forms.ToolStripMenuItem();
            this.menuMasterBook = new System.Windows.Forms.ToolStripMenuItem();
            this.menuTransaction = new System.Windows.Forms.ToolStripMenuItem();
            this.menuBuyBook = new System.Windows.Forms.ToolStripMenuItem();
            this.menuViewTransaction = new System.Windows.Forms.ToolStripMenuItem();
            this.timer = new System.Windows.Forms.Timer(this.components);
            this.menuStrip.SuspendLayout();
            this.SuspendLayout();
            // 
            // menuStrip
            // 
            this.menuStrip.Items.AddRange(new System.Windows.Forms.ToolStripItem[] {
            this.menuHome,
            this.menuMaster,
            this.menuTransaction});
            this.menuStrip.Location = new System.Drawing.Point(0, 0);
            this.menuStrip.Name = "menuStrip";
            this.menuStrip.Size = new System.Drawing.Size(284, 24);
            this.menuStrip.TabIndex = 0;
            this.menuStrip.Text = "menuStrip1";
            // 
            // menuHome
            // 
            this.menuHome.DropDownItems.AddRange(new System.Windows.Forms.ToolStripItem[] {
            this.menuLogin,
            this.menuLogout,
            this.menuExit});
            this.menuHome.Name = "menuHome";
            this.menuHome.Size = new System.Drawing.Size(52, 20);
            this.menuHome.Text = "Home";
            // 
            // menuLogin
            // 
            this.menuLogin.Name = "menuLogin";
            this.menuLogin.Size = new System.Drawing.Size(152, 22);
            this.menuLogin.Text = "Login";
            this.menuLogin.Click += new System.EventHandler(this.menuLogin_Click);
            // 
            // menuLogout
            // 
            this.menuLogout.Name = "menuLogout";
            this.menuLogout.Size = new System.Drawing.Size(152, 22);
            this.menuLogout.Text = "Logout";
            this.menuLogout.Click += new System.EventHandler(this.menuLogout_Click);
            // 
            // menuExit
            // 
            this.menuExit.Name = "menuExit";
            this.menuExit.Size = new System.Drawing.Size(152, 22);
            this.menuExit.Text = "Exit";
            this.menuExit.Click += new System.EventHandler(this.menuExit_Click);
            // 
            // menuMaster
            // 
            this.menuMaster.DropDownItems.AddRange(new System.Windows.Forms.ToolStripItem[] {
            this.menuMasterEmployee,
            this.menuMasterBookType,
            this.menuMasterBook});
            this.menuMaster.Name = "menuMaster";
            this.menuMaster.Size = new System.Drawing.Size(55, 20);
            this.menuMaster.Text = "Master";
            // 
            // menuMasterEmployee
            // 
            this.menuMasterEmployee.Name = "menuMasterEmployee";
            this.menuMasterEmployee.Size = new System.Drawing.Size(169, 22);
            this.menuMasterEmployee.Text = "Master Employee";
            this.menuMasterEmployee.Click += new System.EventHandler(this.menuMasterEmployee_Click);
            // 
            // menuMasterBookType
            // 
            this.menuMasterBookType.Name = "menuMasterBookType";
            this.menuMasterBookType.Size = new System.Drawing.Size(169, 22);
            this.menuMasterBookType.Text = "Master Book Type";
            this.menuMasterBookType.Click += new System.EventHandler(this.menuMasterBookType_Click);
            // 
            // menuMasterBook
            // 
            this.menuMasterBook.Name = "menuMasterBook";
            this.menuMasterBook.Size = new System.Drawing.Size(169, 22);
            this.menuMasterBook.Text = "Master Book";
            this.menuMasterBook.Click += new System.EventHandler(this.menuMasterBook_Click);
            // 
            // menuTransaction
            // 
            this.menuTransaction.DropDownItems.AddRange(new System.Windows.Forms.ToolStripItem[] {
            this.menuBuyBook,
            this.menuViewTransaction});
            this.menuTransaction.Name = "menuTransaction";
            this.menuTransaction.Size = new System.Drawing.Size(81, 20);
            this.menuTransaction.Text = "Transaction";
            // 
            // menuBuyBook
            // 
            this.menuBuyBook.Name = "menuBuyBook";
            this.menuBuyBook.Size = new System.Drawing.Size(164, 22);
            this.menuBuyBook.Text = "Buy Book";
            this.menuBuyBook.Click += new System.EventHandler(this.menuBuyBook_Click);
            // 
            // menuViewTransaction
            // 
            this.menuViewTransaction.Name = "menuViewTransaction";
            this.menuViewTransaction.Size = new System.Drawing.Size(164, 22);
            this.menuViewTransaction.Text = "View Transaction";
            this.menuViewTransaction.Click += new System.EventHandler(this.menuViewTransaction_Click);
            // 
            // timer
            // 
            this.timer.Enabled = true;
            this.timer.Tick += new System.EventHandler(this.timer_Tick);
            // 
            // MainForm
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.BackgroundImage = global::WindowsFormsApplication1.Properties.Resources.background;
            this.BackgroundImageLayout = System.Windows.Forms.ImageLayout.Stretch;
            this.ClientSize = new System.Drawing.Size(284, 261);
            this.Controls.Add(this.menuStrip);
            this.IsMdiContainer = true;
            this.MainMenuStrip = this.menuStrip;
            this.Name = "MainForm";
            this.StartPosition = System.Windows.Forms.FormStartPosition.CenterScreen;
            this.Text = "BlueJack BookShop";
            this.WindowState = System.Windows.Forms.FormWindowState.Maximized;
            this.Load += new System.EventHandler(this.MainForm_Load);
            this.menuStrip.ResumeLayout(false);
            this.menuStrip.PerformLayout();
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion

        private System.Windows.Forms.MenuStrip menuStrip;
        private System.Windows.Forms.ToolStripMenuItem menuHome;
        private System.Windows.Forms.ToolStripMenuItem menuLogin;
        private System.Windows.Forms.ToolStripMenuItem menuLogout;
        private System.Windows.Forms.ToolStripMenuItem menuExit;
        private System.Windows.Forms.ToolStripMenuItem menuMaster;
        private System.Windows.Forms.ToolStripMenuItem menuMasterEmployee;
        private System.Windows.Forms.ToolStripMenuItem menuMasterBookType;
        private System.Windows.Forms.ToolStripMenuItem menuMasterBook;
        private System.Windows.Forms.ToolStripMenuItem menuTransaction;
        private System.Windows.Forms.ToolStripMenuItem menuBuyBook;
        private System.Windows.Forms.ToolStripMenuItem menuViewTransaction;
        private System.Windows.Forms.Timer timer;
    }
}

