namespace WindowsFormsApplication1
{
    partial class MsBookTypeForm
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
            this.dataGridBookType = new System.Windows.Forms.DataGridView();
            this.txtMasterBookType = new System.Windows.Forms.Label();
            this.butInsert = new System.Windows.Forms.Button();
            this.butUpdate = new System.Windows.Forms.Button();
            this.butDelete = new System.Windows.Forms.Button();
            this.butSave = new System.Windows.Forms.Button();
            this.butCancel = new System.Windows.Forms.Button();
            this.txtBookTypeID = new System.Windows.Forms.Label();
            this.txtBookTypeName = new System.Windows.Forms.Label();
            this.boxBookTypeID = new System.Windows.Forms.TextBox();
            this.boxBookTypeName = new System.Windows.Forms.TextBox();
            ((System.ComponentModel.ISupportInitialize)(this.dataGridBookType)).BeginInit();
            this.SuspendLayout();
            // 
            // dataGridBookType
            // 
            this.dataGridBookType.AllowUserToAddRows = false;
            this.dataGridBookType.AllowUserToDeleteRows = false;
            this.dataGridBookType.ColumnHeadersHeightSizeMode = System.Windows.Forms.DataGridViewColumnHeadersHeightSizeMode.AutoSize;
            this.dataGridBookType.Location = new System.Drawing.Point(12, 63);
            this.dataGridBookType.Name = "dataGridBookType";
            this.dataGridBookType.ReadOnly = true;
            this.dataGridBookType.Size = new System.Drawing.Size(399, 150);
            this.dataGridBookType.TabIndex = 3;
            this.dataGridBookType.CellClick += new System.Windows.Forms.DataGridViewCellEventHandler(this.dataGridBookType_CellClick);
            // 
            // txtMasterBookType
            // 
            this.txtMasterBookType.AutoSize = true;
            this.txtMasterBookType.Font = new System.Drawing.Font("Microsoft Sans Serif", 15.75F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.txtMasterBookType.Location = new System.Drawing.Point(96, 19);
            this.txtMasterBookType.Name = "txtMasterBookType";
            this.txtMasterBookType.Size = new System.Drawing.Size(244, 25);
            this.txtMasterBookType.TabIndex = 2;
            this.txtMasterBookType.Text = "MASTER BOOK TYPE";
            // 
            // butInsert
            // 
            this.butInsert.Location = new System.Drawing.Point(12, 301);
            this.butInsert.Name = "butInsert";
            this.butInsert.Size = new System.Drawing.Size(75, 23);
            this.butInsert.TabIndex = 4;
            this.butInsert.Text = "Insert";
            this.butInsert.UseVisualStyleBackColor = true;
            this.butInsert.Click += new System.EventHandler(this.butInsert_Click);
            // 
            // butUpdate
            // 
            this.butUpdate.Location = new System.Drawing.Point(93, 301);
            this.butUpdate.Name = "butUpdate";
            this.butUpdate.Size = new System.Drawing.Size(75, 23);
            this.butUpdate.TabIndex = 4;
            this.butUpdate.Text = "Update";
            this.butUpdate.UseVisualStyleBackColor = true;
            this.butUpdate.Click += new System.EventHandler(this.butUpdate_Click);
            // 
            // butDelete
            // 
            this.butDelete.Location = new System.Drawing.Point(174, 301);
            this.butDelete.Name = "butDelete";
            this.butDelete.Size = new System.Drawing.Size(75, 23);
            this.butDelete.TabIndex = 4;
            this.butDelete.Text = "Delete";
            this.butDelete.UseVisualStyleBackColor = true;
            this.butDelete.Click += new System.EventHandler(this.butDelete_Click);
            // 
            // butSave
            // 
            this.butSave.Location = new System.Drawing.Point(255, 301);
            this.butSave.Name = "butSave";
            this.butSave.Size = new System.Drawing.Size(75, 23);
            this.butSave.TabIndex = 4;
            this.butSave.Text = "Save";
            this.butSave.UseVisualStyleBackColor = true;
            this.butSave.Click += new System.EventHandler(this.butSave_Click);
            // 
            // butCancel
            // 
            this.butCancel.Location = new System.Drawing.Point(336, 301);
            this.butCancel.Name = "butCancel";
            this.butCancel.Size = new System.Drawing.Size(75, 23);
            this.butCancel.TabIndex = 4;
            this.butCancel.Text = "Cancel";
            this.butCancel.UseVisualStyleBackColor = true;
            this.butCancel.Click += new System.EventHandler(this.butCancel_Click);
            // 
            // txtBookTypeID
            // 
            this.txtBookTypeID.AutoSize = true;
            this.txtBookTypeID.Location = new System.Drawing.Point(67, 229);
            this.txtBookTypeID.Name = "txtBookTypeID";
            this.txtBookTypeID.Size = new System.Drawing.Size(73, 13);
            this.txtBookTypeID.TabIndex = 5;
            this.txtBookTypeID.Text = "Book Type ID";
            // 
            // txtBookTypeName
            // 
            this.txtBookTypeName.AutoSize = true;
            this.txtBookTypeName.Location = new System.Drawing.Point(67, 263);
            this.txtBookTypeName.Name = "txtBookTypeName";
            this.txtBookTypeName.Size = new System.Drawing.Size(90, 13);
            this.txtBookTypeName.TabIndex = 6;
            this.txtBookTypeName.Text = "Book Type Name";
            // 
            // boxBookTypeID
            // 
            this.boxBookTypeID.Location = new System.Drawing.Point(186, 226);
            this.boxBookTypeID.Name = "boxBookTypeID";
            this.boxBookTypeID.Size = new System.Drawing.Size(154, 20);
            this.boxBookTypeID.TabIndex = 7;
            // 
            // boxBookTypeName
            // 
            this.boxBookTypeName.Location = new System.Drawing.Point(186, 260);
            this.boxBookTypeName.Name = "boxBookTypeName";
            this.boxBookTypeName.Size = new System.Drawing.Size(154, 20);
            this.boxBookTypeName.TabIndex = 8;
            // 
            // MsBookTypeForm
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(423, 332);
            this.Controls.Add(this.boxBookTypeName);
            this.Controls.Add(this.boxBookTypeID);
            this.Controls.Add(this.txtBookTypeName);
            this.Controls.Add(this.txtBookTypeID);
            this.Controls.Add(this.butCancel);
            this.Controls.Add(this.butSave);
            this.Controls.Add(this.butDelete);
            this.Controls.Add(this.butUpdate);
            this.Controls.Add(this.butInsert);
            this.Controls.Add(this.dataGridBookType);
            this.Controls.Add(this.txtMasterBookType);
            this.Name = "MsBookTypeForm";
            this.Text = "MsBookTypeForm";
            this.Load += new System.EventHandler(this.MsBookTypeForm_Load);
            ((System.ComponentModel.ISupportInitialize)(this.dataGridBookType)).EndInit();
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion

        private System.Windows.Forms.DataGridView dataGridBookType;
        private System.Windows.Forms.Label txtMasterBookType;
        private System.Windows.Forms.Button butInsert;
        private System.Windows.Forms.Button butUpdate;
        private System.Windows.Forms.Button butDelete;
        private System.Windows.Forms.Button butSave;
        private System.Windows.Forms.Button butCancel;
        private System.Windows.Forms.Label txtBookTypeID;
        private System.Windows.Forms.Label txtBookTypeName;
        private System.Windows.Forms.TextBox boxBookTypeID;
        private System.Windows.Forms.TextBox boxBookTypeName;
    }
}