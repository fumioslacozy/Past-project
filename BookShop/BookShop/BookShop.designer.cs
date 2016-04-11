﻿#pragma warning disable 1591
//------------------------------------------------------------------------------
// <auto-generated>
//     This code was generated by a tool.
//     Runtime Version:4.0.30319.18449
//
//     Changes to this file may cause incorrect behavior and will be lost if
//     the code is regenerated.
// </auto-generated>
//------------------------------------------------------------------------------

namespace WindowsFormsApplication1
{
	using System.Data.Linq;
	using System.Data.Linq.Mapping;
	using System.Data;
	using System.Collections.Generic;
	using System.Reflection;
	using System.Linq;
	using System.Linq.Expressions;
	using System.ComponentModel;
	using System;
	
	
	[global::System.Data.Linq.Mapping.DatabaseAttribute(Name="BookShop")]
	public partial class BookShopDataContext : System.Data.Linq.DataContext
	{
		
		private static System.Data.Linq.Mapping.MappingSource mappingSource = new AttributeMappingSource();
		
    #region Extensibility Method Definitions
    partial void OnCreated();
    partial void InsertDetailTransaction(DetailTransaction instance);
    partial void UpdateDetailTransaction(DetailTransaction instance);
    partial void DeleteDetailTransaction(DetailTransaction instance);
    partial void InsertMsEmployee(MsEmployee instance);
    partial void UpdateMsEmployee(MsEmployee instance);
    partial void DeleteMsEmployee(MsEmployee instance);
    partial void InsertHeaderTransaction(HeaderTransaction instance);
    partial void UpdateHeaderTransaction(HeaderTransaction instance);
    partial void DeleteHeaderTransaction(HeaderTransaction instance);
    partial void InsertMsBook(MsBook instance);
    partial void UpdateMsBook(MsBook instance);
    partial void DeleteMsBook(MsBook instance);
    partial void InsertMsBookType(MsBookType instance);
    partial void UpdateMsBookType(MsBookType instance);
    partial void DeleteMsBookType(MsBookType instance);
    #endregion
		
		public BookShopDataContext() : 
				base(global::WindowsFormsApplication1.Properties.Settings.Default.Database1ConnectionString, mappingSource)
		{
			OnCreated();
		}
		
		public BookShopDataContext(string connection) : 
				base(connection, mappingSource)
		{
			OnCreated();
		}
		
		public BookShopDataContext(System.Data.IDbConnection connection) : 
				base(connection, mappingSource)
		{
			OnCreated();
		}
		
		public BookShopDataContext(string connection, System.Data.Linq.Mapping.MappingSource mappingSource) : 
				base(connection, mappingSource)
		{
			OnCreated();
		}
		
		public BookShopDataContext(System.Data.IDbConnection connection, System.Data.Linq.Mapping.MappingSource mappingSource) : 
				base(connection, mappingSource)
		{
			OnCreated();
		}
		
		public System.Data.Linq.Table<DetailTransaction> DetailTransactions
		{
			get
			{
				return this.GetTable<DetailTransaction>();
			}
		}
		
		public System.Data.Linq.Table<MsEmployee> MsEmployees
		{
			get
			{
				return this.GetTable<MsEmployee>();
			}
		}
		
		public System.Data.Linq.Table<HeaderTransaction> HeaderTransactions
		{
			get
			{
				return this.GetTable<HeaderTransaction>();
			}
		}
		
		public System.Data.Linq.Table<MsBook> MsBooks
		{
			get
			{
				return this.GetTable<MsBook>();
			}
		}
		
		public System.Data.Linq.Table<MsBookType> MsBookTypes
		{
			get
			{
				return this.GetTable<MsBookType>();
			}
		}
	}
	
	[global::System.Data.Linq.Mapping.TableAttribute(Name="dbo.DetailTransaction")]
	public partial class DetailTransaction : INotifyPropertyChanging, INotifyPropertyChanged
	{
		
		private static PropertyChangingEventArgs emptyChangingEventArgs = new PropertyChangingEventArgs(String.Empty);
		
		private string _TrID;
		
		private string _BookID;
		
		private int _Qty;
		
		private int _TotalPrice;
		
		private EntityRef<HeaderTransaction> _HeaderTransaction;
		
		private EntityRef<MsBook> _MsBook;
		
    #region Extensibility Method Definitions
    partial void OnLoaded();
    partial void OnValidate(System.Data.Linq.ChangeAction action);
    partial void OnCreated();
    partial void OnTrIDChanging(string value);
    partial void OnTrIDChanged();
    partial void OnBookIDChanging(string value);
    partial void OnBookIDChanged();
    partial void OnQtyChanging(int value);
    partial void OnQtyChanged();
    partial void OnTotalPriceChanging(int value);
    partial void OnTotalPriceChanged();
    #endregion
		
		public DetailTransaction()
		{
			this._HeaderTransaction = default(EntityRef<HeaderTransaction>);
			this._MsBook = default(EntityRef<MsBook>);
			OnCreated();
		}
		
		[global::System.Data.Linq.Mapping.ColumnAttribute(Storage="_TrID", DbType="Char(5) NOT NULL", CanBeNull=false, IsPrimaryKey=true)]
		public string TrID
		{
			get
			{
				return this._TrID;
			}
			set
			{
				if ((this._TrID != value))
				{
					if (this._HeaderTransaction.HasLoadedOrAssignedValue)
					{
						throw new System.Data.Linq.ForeignKeyReferenceAlreadyHasValueException();
					}
					this.OnTrIDChanging(value);
					this.SendPropertyChanging();
					this._TrID = value;
					this.SendPropertyChanged("TrID");
					this.OnTrIDChanged();
				}
			}
		}
		
		[global::System.Data.Linq.Mapping.ColumnAttribute(Storage="_BookID", DbType="Char(5) NOT NULL", CanBeNull=false, IsPrimaryKey=true)]
		public string BookID
		{
			get
			{
				return this._BookID;
			}
			set
			{
				if ((this._BookID != value))
				{
					if (this._MsBook.HasLoadedOrAssignedValue)
					{
						throw new System.Data.Linq.ForeignKeyReferenceAlreadyHasValueException();
					}
					this.OnBookIDChanging(value);
					this.SendPropertyChanging();
					this._BookID = value;
					this.SendPropertyChanged("BookID");
					this.OnBookIDChanged();
				}
			}
		}
		
		[global::System.Data.Linq.Mapping.ColumnAttribute(Storage="_Qty", DbType="Int NOT NULL")]
		public int Qty
		{
			get
			{
				return this._Qty;
			}
			set
			{
				if ((this._Qty != value))
				{
					this.OnQtyChanging(value);
					this.SendPropertyChanging();
					this._Qty = value;
					this.SendPropertyChanged("Qty");
					this.OnQtyChanged();
				}
			}
		}
		
		[global::System.Data.Linq.Mapping.ColumnAttribute(Storage="_TotalPrice", DbType="Int NOT NULL")]
		public int TotalPrice
		{
			get
			{
				return this._TotalPrice;
			}
			set
			{
				if ((this._TotalPrice != value))
				{
					this.OnTotalPriceChanging(value);
					this.SendPropertyChanging();
					this._TotalPrice = value;
					this.SendPropertyChanged("TotalPrice");
					this.OnTotalPriceChanged();
				}
			}
		}
		
		[global::System.Data.Linq.Mapping.AssociationAttribute(Name="HeaderTransaction_DetailTransaction", Storage="_HeaderTransaction", ThisKey="TrID", OtherKey="TrID", IsForeignKey=true)]
		public HeaderTransaction HeaderTransaction
		{
			get
			{
				return this._HeaderTransaction.Entity;
			}
			set
			{
				HeaderTransaction previousValue = this._HeaderTransaction.Entity;
				if (((previousValue != value) 
							|| (this._HeaderTransaction.HasLoadedOrAssignedValue == false)))
				{
					this.SendPropertyChanging();
					if ((previousValue != null))
					{
						this._HeaderTransaction.Entity = null;
						previousValue.DetailTransactions.Remove(this);
					}
					this._HeaderTransaction.Entity = value;
					if ((value != null))
					{
						value.DetailTransactions.Add(this);
						this._TrID = value.TrID;
					}
					else
					{
						this._TrID = default(string);
					}
					this.SendPropertyChanged("HeaderTransaction");
				}
			}
		}
		
		[global::System.Data.Linq.Mapping.AssociationAttribute(Name="MsBook_DetailTransaction", Storage="_MsBook", ThisKey="BookID", OtherKey="BookID", IsForeignKey=true)]
		public MsBook MsBook
		{
			get
			{
				return this._MsBook.Entity;
			}
			set
			{
				MsBook previousValue = this._MsBook.Entity;
				if (((previousValue != value) 
							|| (this._MsBook.HasLoadedOrAssignedValue == false)))
				{
					this.SendPropertyChanging();
					if ((previousValue != null))
					{
						this._MsBook.Entity = null;
						previousValue.DetailTransactions.Remove(this);
					}
					this._MsBook.Entity = value;
					if ((value != null))
					{
						value.DetailTransactions.Add(this);
						this._BookID = value.BookID;
					}
					else
					{
						this._BookID = default(string);
					}
					this.SendPropertyChanged("MsBook");
				}
			}
		}
		
		public event PropertyChangingEventHandler PropertyChanging;
		
		public event PropertyChangedEventHandler PropertyChanged;
		
		protected virtual void SendPropertyChanging()
		{
			if ((this.PropertyChanging != null))
			{
				this.PropertyChanging(this, emptyChangingEventArgs);
			}
		}
		
		protected virtual void SendPropertyChanged(String propertyName)
		{
			if ((this.PropertyChanged != null))
			{
				this.PropertyChanged(this, new PropertyChangedEventArgs(propertyName));
			}
		}
	}
	
	[global::System.Data.Linq.Mapping.TableAttribute(Name="dbo.MsEmployee")]
	public partial class MsEmployee : INotifyPropertyChanging, INotifyPropertyChanged
	{
		
		private static PropertyChangingEventArgs emptyChangingEventArgs = new PropertyChangingEventArgs(String.Empty);
		
		private string _EmployeeID;
		
		private string _Name;
		
		private string _Email;
		
		private string _Password;
		
		private string _Role;
		
		private EntitySet<HeaderTransaction> _HeaderTransactions;
		
    #region Extensibility Method Definitions
    partial void OnLoaded();
    partial void OnValidate(System.Data.Linq.ChangeAction action);
    partial void OnCreated();
    partial void OnEmployeeIDChanging(string value);
    partial void OnEmployeeIDChanged();
    partial void OnNameChanging(string value);
    partial void OnNameChanged();
    partial void OnEmailChanging(string value);
    partial void OnEmailChanged();
    partial void OnPasswordChanging(string value);
    partial void OnPasswordChanged();
    partial void OnRoleChanging(string value);
    partial void OnRoleChanged();
    #endregion
		
		public MsEmployee()
		{
			this._HeaderTransactions = new EntitySet<HeaderTransaction>(new Action<HeaderTransaction>(this.attach_HeaderTransactions), new Action<HeaderTransaction>(this.detach_HeaderTransactions));
			OnCreated();
		}
		
		[global::System.Data.Linq.Mapping.ColumnAttribute(Storage="_EmployeeID", DbType="Char(5) NOT NULL", CanBeNull=false, IsPrimaryKey=true)]
		public string EmployeeID
		{
			get
			{
				return this._EmployeeID;
			}
			set
			{
				if ((this._EmployeeID != value))
				{
					this.OnEmployeeIDChanging(value);
					this.SendPropertyChanging();
					this._EmployeeID = value;
					this.SendPropertyChanged("EmployeeID");
					this.OnEmployeeIDChanged();
				}
			}
		}
		
		[global::System.Data.Linq.Mapping.ColumnAttribute(Storage="_Name", DbType="VarChar(50) NOT NULL", CanBeNull=false)]
		public string Name
		{
			get
			{
				return this._Name;
			}
			set
			{
				if ((this._Name != value))
				{
					this.OnNameChanging(value);
					this.SendPropertyChanging();
					this._Name = value;
					this.SendPropertyChanged("Name");
					this.OnNameChanged();
				}
			}
		}
		
		[global::System.Data.Linq.Mapping.ColumnAttribute(Storage="_Email", DbType="VarChar(50) NOT NULL", CanBeNull=false)]
		public string Email
		{
			get
			{
				return this._Email;
			}
			set
			{
				if ((this._Email != value))
				{
					this.OnEmailChanging(value);
					this.SendPropertyChanging();
					this._Email = value;
					this.SendPropertyChanged("Email");
					this.OnEmailChanged();
				}
			}
		}
		
		[global::System.Data.Linq.Mapping.ColumnAttribute(Storage="_Password", DbType="VarChar(50) NOT NULL", CanBeNull=false)]
		public string Password
		{
			get
			{
				return this._Password;
			}
			set
			{
				if ((this._Password != value))
				{
					this.OnPasswordChanging(value);
					this.SendPropertyChanging();
					this._Password = value;
					this.SendPropertyChanged("Password");
					this.OnPasswordChanged();
				}
			}
		}
		
		[global::System.Data.Linq.Mapping.ColumnAttribute(Storage="_Role", DbType="VarChar(20) NOT NULL", CanBeNull=false)]
		public string Role
		{
			get
			{
				return this._Role;
			}
			set
			{
				if ((this._Role != value))
				{
					this.OnRoleChanging(value);
					this.SendPropertyChanging();
					this._Role = value;
					this.SendPropertyChanged("Role");
					this.OnRoleChanged();
				}
			}
		}
		
		[global::System.Data.Linq.Mapping.AssociationAttribute(Name="MsEmployee_HeaderTransaction", Storage="_HeaderTransactions", ThisKey="EmployeeID", OtherKey="EmployeeID")]
		public EntitySet<HeaderTransaction> HeaderTransactions
		{
			get
			{
				return this._HeaderTransactions;
			}
			set
			{
				this._HeaderTransactions.Assign(value);
			}
		}
		
		public event PropertyChangingEventHandler PropertyChanging;
		
		public event PropertyChangedEventHandler PropertyChanged;
		
		protected virtual void SendPropertyChanging()
		{
			if ((this.PropertyChanging != null))
			{
				this.PropertyChanging(this, emptyChangingEventArgs);
			}
		}
		
		protected virtual void SendPropertyChanged(String propertyName)
		{
			if ((this.PropertyChanged != null))
			{
				this.PropertyChanged(this, new PropertyChangedEventArgs(propertyName));
			}
		}
		
		private void attach_HeaderTransactions(HeaderTransaction entity)
		{
			this.SendPropertyChanging();
			entity.MsEmployee = this;
		}
		
		private void detach_HeaderTransactions(HeaderTransaction entity)
		{
			this.SendPropertyChanging();
			entity.MsEmployee = null;
		}
	}
	
	[global::System.Data.Linq.Mapping.TableAttribute(Name="dbo.HeaderTransaction")]
	public partial class HeaderTransaction : INotifyPropertyChanging, INotifyPropertyChanged
	{
		
		private static PropertyChangingEventArgs emptyChangingEventArgs = new PropertyChangingEventArgs(String.Empty);
		
		private string _TrID;
		
		private string _CustomerName;
		
		private System.DateTime _DateTransaction;
		
		private int _TotalTransaction;
		
		private string _PaymentType;
		
		private string _EmployeeID;
		
		private EntitySet<DetailTransaction> _DetailTransactions;
		
		private EntityRef<MsEmployee> _MsEmployee;
		
    #region Extensibility Method Definitions
    partial void OnLoaded();
    partial void OnValidate(System.Data.Linq.ChangeAction action);
    partial void OnCreated();
    partial void OnTrIDChanging(string value);
    partial void OnTrIDChanged();
    partial void OnCustomerNameChanging(string value);
    partial void OnCustomerNameChanged();
    partial void OnDateTransactionChanging(System.DateTime value);
    partial void OnDateTransactionChanged();
    partial void OnTotalTransactionChanging(int value);
    partial void OnTotalTransactionChanged();
    partial void OnPaymentTypeChanging(string value);
    partial void OnPaymentTypeChanged();
    partial void OnEmployeeIDChanging(string value);
    partial void OnEmployeeIDChanged();
    #endregion
		
		public HeaderTransaction()
		{
			this._DetailTransactions = new EntitySet<DetailTransaction>(new Action<DetailTransaction>(this.attach_DetailTransactions), new Action<DetailTransaction>(this.detach_DetailTransactions));
			this._MsEmployee = default(EntityRef<MsEmployee>);
			OnCreated();
		}
		
		[global::System.Data.Linq.Mapping.ColumnAttribute(Storage="_TrID", DbType="Char(5) NOT NULL", CanBeNull=false, IsPrimaryKey=true)]
		public string TrID
		{
			get
			{
				return this._TrID;
			}
			set
			{
				if ((this._TrID != value))
				{
					this.OnTrIDChanging(value);
					this.SendPropertyChanging();
					this._TrID = value;
					this.SendPropertyChanged("TrID");
					this.OnTrIDChanged();
				}
			}
		}
		
		[global::System.Data.Linq.Mapping.ColumnAttribute(Storage="_CustomerName", DbType="VarChar(50) NOT NULL", CanBeNull=false)]
		public string CustomerName
		{
			get
			{
				return this._CustomerName;
			}
			set
			{
				if ((this._CustomerName != value))
				{
					this.OnCustomerNameChanging(value);
					this.SendPropertyChanging();
					this._CustomerName = value;
					this.SendPropertyChanged("CustomerName");
					this.OnCustomerNameChanged();
				}
			}
		}
		
		[global::System.Data.Linq.Mapping.ColumnAttribute(Storage="_DateTransaction", DbType="DateTime NOT NULL")]
		public System.DateTime DateTransaction
		{
			get
			{
				return this._DateTransaction;
			}
			set
			{
				if ((this._DateTransaction != value))
				{
					this.OnDateTransactionChanging(value);
					this.SendPropertyChanging();
					this._DateTransaction = value;
					this.SendPropertyChanged("DateTransaction");
					this.OnDateTransactionChanged();
				}
			}
		}
		
		[global::System.Data.Linq.Mapping.ColumnAttribute(Storage="_TotalTransaction", DbType="Int NOT NULL")]
		public int TotalTransaction
		{
			get
			{
				return this._TotalTransaction;
			}
			set
			{
				if ((this._TotalTransaction != value))
				{
					this.OnTotalTransactionChanging(value);
					this.SendPropertyChanging();
					this._TotalTransaction = value;
					this.SendPropertyChanged("TotalTransaction");
					this.OnTotalTransactionChanged();
				}
			}
		}
		
		[global::System.Data.Linq.Mapping.ColumnAttribute(Storage="_PaymentType", DbType="VarChar(20) NOT NULL", CanBeNull=false)]
		public string PaymentType
		{
			get
			{
				return this._PaymentType;
			}
			set
			{
				if ((this._PaymentType != value))
				{
					this.OnPaymentTypeChanging(value);
					this.SendPropertyChanging();
					this._PaymentType = value;
					this.SendPropertyChanged("PaymentType");
					this.OnPaymentTypeChanged();
				}
			}
		}
		
		[global::System.Data.Linq.Mapping.ColumnAttribute(Storage="_EmployeeID", DbType="Char(5) NOT NULL", CanBeNull=false)]
		public string EmployeeID
		{
			get
			{
				return this._EmployeeID;
			}
			set
			{
				if ((this._EmployeeID != value))
				{
					if (this._MsEmployee.HasLoadedOrAssignedValue)
					{
						throw new System.Data.Linq.ForeignKeyReferenceAlreadyHasValueException();
					}
					this.OnEmployeeIDChanging(value);
					this.SendPropertyChanging();
					this._EmployeeID = value;
					this.SendPropertyChanged("EmployeeID");
					this.OnEmployeeIDChanged();
				}
			}
		}
		
		[global::System.Data.Linq.Mapping.AssociationAttribute(Name="HeaderTransaction_DetailTransaction", Storage="_DetailTransactions", ThisKey="TrID", OtherKey="TrID")]
		public EntitySet<DetailTransaction> DetailTransactions
		{
			get
			{
				return this._DetailTransactions;
			}
			set
			{
				this._DetailTransactions.Assign(value);
			}
		}
		
		[global::System.Data.Linq.Mapping.AssociationAttribute(Name="MsEmployee_HeaderTransaction", Storage="_MsEmployee", ThisKey="EmployeeID", OtherKey="EmployeeID", IsForeignKey=true)]
		public MsEmployee MsEmployee
		{
			get
			{
				return this._MsEmployee.Entity;
			}
			set
			{
				MsEmployee previousValue = this._MsEmployee.Entity;
				if (((previousValue != value) 
							|| (this._MsEmployee.HasLoadedOrAssignedValue == false)))
				{
					this.SendPropertyChanging();
					if ((previousValue != null))
					{
						this._MsEmployee.Entity = null;
						previousValue.HeaderTransactions.Remove(this);
					}
					this._MsEmployee.Entity = value;
					if ((value != null))
					{
						value.HeaderTransactions.Add(this);
						this._EmployeeID = value.EmployeeID;
					}
					else
					{
						this._EmployeeID = default(string);
					}
					this.SendPropertyChanged("MsEmployee");
				}
			}
		}
		
		public event PropertyChangingEventHandler PropertyChanging;
		
		public event PropertyChangedEventHandler PropertyChanged;
		
		protected virtual void SendPropertyChanging()
		{
			if ((this.PropertyChanging != null))
			{
				this.PropertyChanging(this, emptyChangingEventArgs);
			}
		}
		
		protected virtual void SendPropertyChanged(String propertyName)
		{
			if ((this.PropertyChanged != null))
			{
				this.PropertyChanged(this, new PropertyChangedEventArgs(propertyName));
			}
		}
		
		private void attach_DetailTransactions(DetailTransaction entity)
		{
			this.SendPropertyChanging();
			entity.HeaderTransaction = this;
		}
		
		private void detach_DetailTransactions(DetailTransaction entity)
		{
			this.SendPropertyChanging();
			entity.HeaderTransaction = null;
		}
	}
	
	[global::System.Data.Linq.Mapping.TableAttribute(Name="dbo.MsBook")]
	public partial class MsBook : INotifyPropertyChanging, INotifyPropertyChanged
	{
		
		private static PropertyChangingEventArgs emptyChangingEventArgs = new PropertyChangingEventArgs(String.Empty);
		
		private string _BookID;
		
		private string _BookTitle;
		
		private string _BookTypeID;
		
		private int _Price;
		
		private int _TotalPage;
		
		private string _Author;
		
		private string _Publisher;
		
		private string _ISBN;
		
		private int _Stock;
		
		private EntitySet<DetailTransaction> _DetailTransactions;
		
		private EntityRef<MsBookType> _MsBookType;
		
    #region Extensibility Method Definitions
    partial void OnLoaded();
    partial void OnValidate(System.Data.Linq.ChangeAction action);
    partial void OnCreated();
    partial void OnBookIDChanging(string value);
    partial void OnBookIDChanged();
    partial void OnBookTitleChanging(string value);
    partial void OnBookTitleChanged();
    partial void OnBookTypeIDChanging(string value);
    partial void OnBookTypeIDChanged();
    partial void OnPriceChanging(int value);
    partial void OnPriceChanged();
    partial void OnTotalPageChanging(int value);
    partial void OnTotalPageChanged();
    partial void OnAuthorChanging(string value);
    partial void OnAuthorChanged();
    partial void OnPublisherChanging(string value);
    partial void OnPublisherChanged();
    partial void OnISBNChanging(string value);
    partial void OnISBNChanged();
    partial void OnStockChanging(int value);
    partial void OnStockChanged();
    #endregion
		
		public MsBook()
		{
			this._DetailTransactions = new EntitySet<DetailTransaction>(new Action<DetailTransaction>(this.attach_DetailTransactions), new Action<DetailTransaction>(this.detach_DetailTransactions));
			this._MsBookType = default(EntityRef<MsBookType>);
			OnCreated();
		}
		
		[global::System.Data.Linq.Mapping.ColumnAttribute(Storage="_BookID", DbType="Char(5) NOT NULL", CanBeNull=false, IsPrimaryKey=true)]
		public string BookID
		{
			get
			{
				return this._BookID;
			}
			set
			{
				if ((this._BookID != value))
				{
					this.OnBookIDChanging(value);
					this.SendPropertyChanging();
					this._BookID = value;
					this.SendPropertyChanged("BookID");
					this.OnBookIDChanged();
				}
			}
		}
		
		[global::System.Data.Linq.Mapping.ColumnAttribute(Storage="_BookTitle", DbType="VarChar(50) NOT NULL", CanBeNull=false)]
		public string BookTitle
		{
			get
			{
				return this._BookTitle;
			}
			set
			{
				if ((this._BookTitle != value))
				{
					this.OnBookTitleChanging(value);
					this.SendPropertyChanging();
					this._BookTitle = value;
					this.SendPropertyChanged("BookTitle");
					this.OnBookTitleChanged();
				}
			}
		}
		
		[global::System.Data.Linq.Mapping.ColumnAttribute(Storage="_BookTypeID", DbType="Char(5) NOT NULL", CanBeNull=false)]
		public string BookTypeID
		{
			get
			{
				return this._BookTypeID;
			}
			set
			{
				if ((this._BookTypeID != value))
				{
					if (this._MsBookType.HasLoadedOrAssignedValue)
					{
						throw new System.Data.Linq.ForeignKeyReferenceAlreadyHasValueException();
					}
					this.OnBookTypeIDChanging(value);
					this.SendPropertyChanging();
					this._BookTypeID = value;
					this.SendPropertyChanged("BookTypeID");
					this.OnBookTypeIDChanged();
				}
			}
		}
		
		[global::System.Data.Linq.Mapping.ColumnAttribute(Storage="_Price", DbType="Int NOT NULL")]
		public int Price
		{
			get
			{
				return this._Price;
			}
			set
			{
				if ((this._Price != value))
				{
					this.OnPriceChanging(value);
					this.SendPropertyChanging();
					this._Price = value;
					this.SendPropertyChanged("Price");
					this.OnPriceChanged();
				}
			}
		}
		
		[global::System.Data.Linq.Mapping.ColumnAttribute(Storage="_TotalPage", DbType="Int NOT NULL")]
		public int TotalPage
		{
			get
			{
				return this._TotalPage;
			}
			set
			{
				if ((this._TotalPage != value))
				{
					this.OnTotalPageChanging(value);
					this.SendPropertyChanging();
					this._TotalPage = value;
					this.SendPropertyChanged("TotalPage");
					this.OnTotalPageChanged();
				}
			}
		}
		
		[global::System.Data.Linq.Mapping.ColumnAttribute(Storage="_Author", DbType="VarChar(50) NOT NULL", CanBeNull=false)]
		public string Author
		{
			get
			{
				return this._Author;
			}
			set
			{
				if ((this._Author != value))
				{
					this.OnAuthorChanging(value);
					this.SendPropertyChanging();
					this._Author = value;
					this.SendPropertyChanged("Author");
					this.OnAuthorChanged();
				}
			}
		}
		
		[global::System.Data.Linq.Mapping.ColumnAttribute(Storage="_Publisher", DbType="VarChar(50) NOT NULL", CanBeNull=false)]
		public string Publisher
		{
			get
			{
				return this._Publisher;
			}
			set
			{
				if ((this._Publisher != value))
				{
					this.OnPublisherChanging(value);
					this.SendPropertyChanging();
					this._Publisher = value;
					this.SendPropertyChanged("Publisher");
					this.OnPublisherChanged();
				}
			}
		}
		
		[global::System.Data.Linq.Mapping.ColumnAttribute(Storage="_ISBN", DbType="VarChar(50) NOT NULL", CanBeNull=false)]
		public string ISBN
		{
			get
			{
				return this._ISBN;
			}
			set
			{
				if ((this._ISBN != value))
				{
					this.OnISBNChanging(value);
					this.SendPropertyChanging();
					this._ISBN = value;
					this.SendPropertyChanged("ISBN");
					this.OnISBNChanged();
				}
			}
		}
		
		[global::System.Data.Linq.Mapping.ColumnAttribute(Storage="_Stock", DbType="Int NOT NULL")]
		public int Stock
		{
			get
			{
				return this._Stock;
			}
			set
			{
				if ((this._Stock != value))
				{
					this.OnStockChanging(value);
					this.SendPropertyChanging();
					this._Stock = value;
					this.SendPropertyChanged("Stock");
					this.OnStockChanged();
				}
			}
		}
		
		[global::System.Data.Linq.Mapping.AssociationAttribute(Name="MsBook_DetailTransaction", Storage="_DetailTransactions", ThisKey="BookID", OtherKey="BookID")]
		public EntitySet<DetailTransaction> DetailTransactions
		{
			get
			{
				return this._DetailTransactions;
			}
			set
			{
				this._DetailTransactions.Assign(value);
			}
		}
		
		[global::System.Data.Linq.Mapping.AssociationAttribute(Name="MsBookType_MsBook", Storage="_MsBookType", ThisKey="BookTypeID", OtherKey="BookTypeID", IsForeignKey=true)]
		public MsBookType MsBookType
		{
			get
			{
				return this._MsBookType.Entity;
			}
			set
			{
				MsBookType previousValue = this._MsBookType.Entity;
				if (((previousValue != value) 
							|| (this._MsBookType.HasLoadedOrAssignedValue == false)))
				{
					this.SendPropertyChanging();
					if ((previousValue != null))
					{
						this._MsBookType.Entity = null;
						previousValue.MsBooks.Remove(this);
					}
					this._MsBookType.Entity = value;
					if ((value != null))
					{
						value.MsBooks.Add(this);
						this._BookTypeID = value.BookTypeID;
					}
					else
					{
						this._BookTypeID = default(string);
					}
					this.SendPropertyChanged("MsBookType");
				}
			}
		}
		
		public event PropertyChangingEventHandler PropertyChanging;
		
		public event PropertyChangedEventHandler PropertyChanged;
		
		protected virtual void SendPropertyChanging()
		{
			if ((this.PropertyChanging != null))
			{
				this.PropertyChanging(this, emptyChangingEventArgs);
			}
		}
		
		protected virtual void SendPropertyChanged(String propertyName)
		{
			if ((this.PropertyChanged != null))
			{
				this.PropertyChanged(this, new PropertyChangedEventArgs(propertyName));
			}
		}
		
		private void attach_DetailTransactions(DetailTransaction entity)
		{
			this.SendPropertyChanging();
			entity.MsBook = this;
		}
		
		private void detach_DetailTransactions(DetailTransaction entity)
		{
			this.SendPropertyChanging();
			entity.MsBook = null;
		}
	}
	
	[global::System.Data.Linq.Mapping.TableAttribute(Name="dbo.MsBookType")]
	public partial class MsBookType : INotifyPropertyChanging, INotifyPropertyChanged
	{
		
		private static PropertyChangingEventArgs emptyChangingEventArgs = new PropertyChangingEventArgs(String.Empty);
		
		private string _BookTypeID;
		
		private string _BookTypeName;
		
		private EntitySet<MsBook> _MsBooks;
		
    #region Extensibility Method Definitions
    partial void OnLoaded();
    partial void OnValidate(System.Data.Linq.ChangeAction action);
    partial void OnCreated();
    partial void OnBookTypeIDChanging(string value);
    partial void OnBookTypeIDChanged();
    partial void OnBookTypeNameChanging(string value);
    partial void OnBookTypeNameChanged();
    #endregion
		
		public MsBookType()
		{
			this._MsBooks = new EntitySet<MsBook>(new Action<MsBook>(this.attach_MsBooks), new Action<MsBook>(this.detach_MsBooks));
			OnCreated();
		}
		
		[global::System.Data.Linq.Mapping.ColumnAttribute(Storage="_BookTypeID", DbType="Char(5) NOT NULL", CanBeNull=false, IsPrimaryKey=true)]
		public string BookTypeID
		{
			get
			{
				return this._BookTypeID;
			}
			set
			{
				if ((this._BookTypeID != value))
				{
					this.OnBookTypeIDChanging(value);
					this.SendPropertyChanging();
					this._BookTypeID = value;
					this.SendPropertyChanged("BookTypeID");
					this.OnBookTypeIDChanged();
				}
			}
		}
		
		[global::System.Data.Linq.Mapping.ColumnAttribute(Storage="_BookTypeName", DbType="VarChar(50) NOT NULL", CanBeNull=false)]
		public string BookTypeName
		{
			get
			{
				return this._BookTypeName;
			}
			set
			{
				if ((this._BookTypeName != value))
				{
					this.OnBookTypeNameChanging(value);
					this.SendPropertyChanging();
					this._BookTypeName = value;
					this.SendPropertyChanged("BookTypeName");
					this.OnBookTypeNameChanged();
				}
			}
		}
		
		[global::System.Data.Linq.Mapping.AssociationAttribute(Name="MsBookType_MsBook", Storage="_MsBooks", ThisKey="BookTypeID", OtherKey="BookTypeID")]
		public EntitySet<MsBook> MsBooks
		{
			get
			{
				return this._MsBooks;
			}
			set
			{
				this._MsBooks.Assign(value);
			}
		}
		
		public event PropertyChangingEventHandler PropertyChanging;
		
		public event PropertyChangedEventHandler PropertyChanged;
		
		protected virtual void SendPropertyChanging()
		{
			if ((this.PropertyChanging != null))
			{
				this.PropertyChanging(this, emptyChangingEventArgs);
			}
		}
		
		protected virtual void SendPropertyChanged(String propertyName)
		{
			if ((this.PropertyChanged != null))
			{
				this.PropertyChanged(this, new PropertyChangedEventArgs(propertyName));
			}
		}
		
		private void attach_MsBooks(MsBook entity)
		{
			this.SendPropertyChanging();
			entity.MsBookType = this;
		}
		
		private void detach_MsBooks(MsBook entity)
		{
			this.SendPropertyChanging();
			entity.MsBookType = null;
		}
	}
}
#pragma warning restore 1591
