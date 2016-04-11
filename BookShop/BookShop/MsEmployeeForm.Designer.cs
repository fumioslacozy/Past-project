namespace WindowsFormsApplication1
{
    partial class MsEmployeeForm
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
            this.txtMasterEmployee = new System.Windows.Forms.Label();
            this.dataGridEmployee = new System.Windows.Forms.DataGridView();
            this.label1 = new System.Windows.Forms.Label();
            this.txtName = new System.Windows.Forms.Label();
            this.txtRole = new System.Windows.Forms.Label();
            this.txtEmail = new System.Windows.Forms.Label();
            this.txtPassword = new System.Windows.Forms.Label();
            this.butInsert = new System.Windows.Forms.Button();
            this.butUpdate = new System.Windows.Forms.Button();
            this.butDelete = new System.Windows.Forms.Button();
            this.butSave = new System.Windows.Forms.Button();
            this.butCancel = new System.Windows.Forms.Button();
            this.boxEmployeeID = new System.Windows.Forms.TextBox();
            this.boxName = new System.Windows.Forms.TextBox();
            this.boxEmail = new System.Windows.Forms.TextBox();
            this.boxPassword = new System.Windows.Forms.TextBox();
            this.boxRole = new System.Windows.Forms.ComboBox();
            this.dataGridPassword = new System.Windows.Forms.DataGridView();
            ((System.ComponentModel.ISupportInitialize)(this.dataGridEmployee)).BeginInit();
            ((System.ComponentModel.ISupportInitialize)(this.dataGridPassword)).BeginInit();
            this.SuspendLayout();
            // 
            // txtMasterEmployee
            // 
            this.txtMasterEmployee.AutoSize = true;
            this.txtMasterEmployee.Font = new System.Drawing.Font("Microsoft Sans Serif", 15.75F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.txtMasterEmployee.Location = new System.Drawing.Point(124, 21);
            this.txtMasterEmployee.Name = "txtMasterEmployee";
            this.txtMasterEmployee.Size = new System.Drawing.Size(238, 25);
            this.txtMasterEmployee.TabIndex = 0;
            this.txtMasterEmployee.Text = "MASTER EMPLOYEE";
            // 
            // dataGridEmployee
            // 
            this.dataGridEmployee.AllowUserToAddRows = false;
            this.dataGridEmployee.AllowUserToDeleteRows = false;
            this.dataGridEmployee.ColumnHeadersHeightSizeMode = System.Windows.Forms.DataGridViewColumnHeadersHeightSizeMode.AutoSize;
            this.dataGridEmployee.Location = new System.Drawing.Point(12, 64);
            this.dataGridEmployee.Name = "dataGridEmployee";
            this.dataGridEmployee.ReadOnly = true;
            this.dataGridEmployee.Size = new System.Drawing.Size(460, 150);
            this.dataGridEmployee.TabIndex = 1;
            this.dataGridEmployee.CellClick += new System.Windows.Forms.DataGridViewCellEventHandler(this.dataGridEmployee_CellClick);
            // 
            // label1
            // 
            this.label1.AutoSize = true;
            this.label1.Location = new System.Drawing.Point(12, 232);
            this.label1.Name = "label1";
            this.label1.Size = new System.Drawing.Size(67, 13);
            this.label1.TabIndex = 2;
            this.label1.Text = "Employee ID";
            // 
            // txtName
            // 
            this.txtName.AutoSize = true;
            this.txtName.Location = new System.Drawing.Point(12, 259);
            this.txtName.Name = "txtName";
            this.txtName.Size = new System.Drawing.Size(35, 13);
            this.txtName.TabIndex = 2;
            this.txtName.Text = "Name";
            // 
            // txtRole
            // 
            this.txtRole.AutoSize = true;
            this.txtRole.Location = new System.Drawing.Point(12, 286);
            this.txtRole.Name = "txtRole";
            this.txtRole.Size = new System.Drawing.Size(29, 13);
            this.txtRole.TabIndex = 2;
            this.txtRole.Text = "Role";
            // 
            // txtEmail
            // 
            this.txtEmail.AutoSize = true;
            this.txtEmail.Location = new System.Drawing.Point(251, 232);
            this.txtEmail.Name = "txtEmail";
            this.txtEmail.Size = new System.Drawing.Size(32, 13);
            this.txtEmail.TabIndex = 2;
            this.txtEmail.Text = "Email";
            // 
            // txtPassword
            // 
            this.txtPassword.AutoSize = true;
            this.txtPassword.Location = new System.Drawing.Point(251, 259);
            this.txtPassword.Name = "txtPassword";
            this.txtPassword.Size = new System.Drawing.Size(53, 13);
            this.txtPassword.TabIndex = 2;
            this.txtPassword.Text = "Password";
            // 
            // butInsert
            // 
            this.butInsert.Location = new System.Drawing.Point(15, 319);
            this.butInsert.Name = "butInsert";
            this.butInsert.Size = new System.Drawing.Size(75, 23);
            this.butInsert.TabIndex = 3;
            this.butInsert.Text = "Insert";
            this.butInsert.UseVisualStyleBackColor = true;
            this.butInsert.Click += new System.EventHandler(this.butInsert_Click);
            // 
            // butUpdate
            // 
            this.butUpdate.Location = new System.Drawing.Point(96, 319);
            this.butUpdate.Name = "butUpdate";
            this.butUpdate.Size = new System.Drawing.Size(75, 23);
            this.butUpdate.TabIndex = 3;
            this.butUpdate.Text = "Update";
            this.butUpdate.UseVisualStyleBackColor = true;
            this.butUpdate.Click += new System.EventHandler(this.butUpdate_Click);
            // 
            // butDelete
            // 
            this.butDelete.Location = new System.Drawing.Point(177, 319);
            this.butDelete.Name = "butDelete";
            this.butDelete.Size = new System.Drawing.Size(75, 23);
            this.butDelete.TabIndex = 3;
            this.butDelete.Text = "Delete";
            this.butDelete.UseVisualStyleBackColor = true;
            this.butDelete.Click += new System.EventHandler(this.butDelete_Click);
            // 
            // butSave
            // 
            this.butSave.Location = new System.Drawing.Point(316, 319);
            this.butSave.Name = "butSave";
            this.butSave.Size = new System.Drawing.Size(75, 23);
            this.butSave.TabIndex = 3;
            this.butSave.Text = "Save";
            this.butSave.UseVisualStyleBackColor = true;
            this.butSave.Click += new System.EventHandler(this.butSave_Click);
            // 
            // butCancel
            // 
            this.butCancel.Location = new System.Drawing.Point(397, 319);
            this.butCancel.Name = "butCancel";
            this.butCancel.Size = new System.Drawing.Size(75, 23);
            this.butCancel.TabIndex = 3;
            this.butCancel.Text = "Cancel";
            this.butCancel.UseVisualStyleBackColor = true;
            this.butCancel.Click += new System.EventHandler(this.butCancel_Click);
            // 
            // boxEmployeeID
            // 
            this.boxEmployeeID.Location = new System.Drawing.Point(96, 229);
            this.boxEmployeeID.Name = "boxEmployeeID";
            this.boxEmployeeID.Size = new System.Drawing.Size(149, 20);
            this.boxEmployeeID.TabIndex = 4;
            // 
            // boxName
            // 
            this.boxName.Location = new System.Drawing.Point(96, 256);
            this.boxName.Name = "boxName";
            this.boxName.Size = new System.Drawing.Size(149, 20);
            this.boxName.TabIndex = 4;
            // 
            // boxEmail
            // 
            this.boxEmail.Location = new System.Drawing.Point(323, 229);
            this.boxEmail.Name = "boxEmail";
            this.boxEmail.Size = new System.Drawing.Size(149, 20);
            this.boxEmail.TabIndex = 4;
            // 
            // boxPassword
            // 
            this.boxPassword.Location = new System.Drawing.Point(323, 256);
            this.boxPassword.Name = "boxPassword";
            this.boxPassword.Size = new System.Drawing.Size(149, 20);
            this.boxPassword.TabIndex = 4;
            this.boxPassword.UseSystemPasswordChar = true;
            // 
            // boxRole
            // 
            this.boxRole.DropDownStyle = System.Windows.Forms.ComboBoxStyle.DropDownList;
            this.boxRole.FormattingEnabled = true;
            this.boxRole.Location = new System.Drawing.Point(96, 282);
            this.boxRole.Name = "boxRole";
            this.boxRole.Size = new System.Drawing.Size(149, 21);
            this.boxRole.TabIndex = 5;
            // 
            // dataGridPassword
            // 
            this.dataGridPassword.AllowUserToAddRows = false;
            this.dataGridPassword.AllowUserToDeleteRows = false;
            this.dataGridPassword.ColumnHeadersHeightSizeMode = System.Windows.Forms.DataGridViewColumnHeadersHeightSizeMode.AutoSize;
            this.dataGridPassword.Location = new System.Drawing.Point(462, 204);
            this.dataGridPassword.Name = "dataGridPassword";
            this.dataGridPassword.ReadOnly = true;
            this.dataGridPassword.Size = new System.Drawing.Size(10, 10);
            this.dataGridPassword.TabIndex = 6;
            // 
            // MsEmployeeForm
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(484, 350);
            this.Controls.Add(this.dataGridPassword);
            this.Controls.Add(this.boxRole);
            this.Controls.Add(this.boxName);
            this.Controls.Add(this.boxPassword);
            this.Controls.Add(this.boxEmail);
            this.Controls.Add(this.boxEmployeeID);
            this.Controls.Add(this.butCancel);
            this.Controls.Add(this.butSave);
            this.Controls.Add(this.butDelete);
            this.Controls.Add(this.butUpdate);
            this.Controls.Add(this.butInsert);
            this.Controls.Add(this.txtRole);
            this.Controls.Add(this.txtPassword);
            this.Controls.Add(this.txtEmail);
            this.Controls.Add(this.txtName);
            this.Controls.Add(this.label1);
            this.Controls.Add(this.dataGridEmployee);
            this.Controls.Add(this.txtMasterEmployee);
            this.Name = "MsEmployeeForm";
            this.Text = "Master Employee Form";
            this.Load += new System.EventHandler(this.MsEmployeeForm_Load);
            ((System.ComponentModel.ISupportInitialize)(this.dataGridEmployee)).EndInit();
            ((System.ComponentModel.ISupportInitialize)(this.dataGridPassword)).EndInit();
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion

        private System.Windows.Forms.Label txtMasterEmployee;
        private System.Windows.Forms.DataGridView dataGridEmployee;
        private System.Windows.Forms.Label label1;
        private System.Windows.Forms.Label txtName;
        private System.Windows.Forms.Label txtRole;
        private System.Windows.Forms.Label txtEmail;
        private System.Windows.Forms.Label txtPassword;
        private System.Windows.Forms.Button butInsert;
        private System.Windows.Forms.Button butUpdate;
        private System.Windows.Forms.Button butDelete;
        private System.Windows.Forms.Button butSave;
        private System.Windows.Forms.Button butCancel;
        private System.Windows.Forms.TextBox boxEmployeeID;
        private System.Windows.Forms.TextBox boxName;
        private System.Windows.Forms.TextBox boxEmail;
        private System.Windows.Forms.TextBox boxPassword;
        private System.Windows.Forms.ComboBox boxRole;
        private System.Windows.Forms.DataGridView dataGridPassword;
    }
}