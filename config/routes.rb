Rails.application.routes.draw do
	
  get '/corporate-partners/login', to: 'sessions#new'
  post '/corporate-partners/login', to: 'sessions#create', :as => :session_login
  get '/corporate-partners/logout', to: 'sessions#destroy', :as => :logout

  get '/corporate-partners/signup' => 'corporate_partners#new_registration'
  post '/corporate-partners/signup' => 'corporate_partners#create_partner', :as => :register_corporate_partner

  get '/corporate-partners/portal' => 'corporate_partners#portal', :defaults => { :id => '240' }
  get '/corporate-partners/events' => 'corporate_partners#events', :defaults => { :id => '239' }
  get '/corporate-partners/contacts' => 'corporate_partners#contacts', :defaults => { :id => '238' }
  get '/corporate-partners' => 'corporate_partners#welcome', :defaults => { :id => '110' }

  get '/manderson-profiles/list' => 'manderson_profiles#list', :as => :manderson_profiles_list
  get '/manderson-profiles' => 'manderson_profiles#directory'
  get '/manderson-profiles/:id' => 'manderson_profiles#student_profile', :as => :student_profile
  
  get '/concierge' => 'corporate_partners#concierge'
  post '/concierge' => 'corporate_partners#create_concierge'
  
  get 'checkins/manderson'
  get 'checkins/create'
  get 'checkins/edit'
  get 'checkins/update'
  get 'checkins/verify'
  get 'checkins/thanks'

  get 'manderson-launch/' => 'launch#welcome'
  get 'launch/' => 'launch#welcome'
  get 'launch/welcome'
  get 'launch/registration'
  get 'launch/directory' => 'launch#directory'
  get 'launch/partners'
  get 'launch/admin'
  get 'launch/corporate_login'

  get 'mbapaths/stemapp'
  post 'mbapaths/stemapp' => 'mbapaths#createstemapp', :as => :createstemapp
  get '/mbapaths/createapp' => 'mbapaths#createapp'
  get 'mbapaths/create'
  get 'mbapaths/thanks'

  get '/elevator_directory/alston' => 'elevator_directory#alston'
  get '/elevator_directory/test'

  get '/phd_students' => 'phd_students#index'
  get '/phd_students/:id' => 'phd_students#profile', :as => :phd_profile
  
#  get 'sp_applications/start' => 'sp_applications#new'
#  post 'sp_applications/submit' => 'sp_applications#submit', :as => :sp_app_submit

  get 'summer-programs/contact-us' => 'summer_programs#new'
  post 'summer-programs/contact-us' => 'summer_programs#create', :as => :sp_contact_request

  get '/businessplan/upload_final_sent' => 'bp_competitions#step_four_thanks', :as => :step_four_completed
  post '/businessplan/upload_final_presentation' => 'bp_competitions#step_four_complete', :as => :complete_step_four
  get '/businessplan/upload_final_presentation' => 'bp_competitions#step_four'
  
  get '/businessplan/upload_sent' => 'bp_competitions#step_three_thanks', :as => :step_three_completed
	post '/businessplan/upload_presentation' => 'bp_competitions#step_three_complete', :as => :complete_step_three
  get '/businessplan/upload_presentation' => 'bp_competitions#step_three'
	
  get '/businessplan/business_summary_sent' => 'bp_competitions#step_two_thanks', :as => :step_two_completed
	post '/businessplan/business_summary' => 'bp_competitions#step_two_complete', :as => :complete_step_two
  get '/businessplan/business_summary' => 'bp_competitions#step_two'
	
  get '/businessplan/registration' => 'aldag_reservations#new'
  post '/businessplan/registration' => 'aldag_reservations#create', :as => :attendee_registration
	
  get '/businessplan/judges/registration' => 'aldag_judges#registration'
  post '/businessplan/judges/registration' => 'aldag_judges#create', :as => :register_aldag_judge

  get '/businessplan/sponsors/new' => 'aldag_sponsors#new'
  post '/businessplan/sponsors/new' => 'aldag_sponsors#create', :as => :sponsorship_request
  
  get '/businessplan/next-steps' => 'bp_competitions#step_one_thanks'
	get '/businessplan/i-plan-to-compete' => 'bp_competitions#timeline'
  
  get '/businessplan', to: redirect('/aei/aei-events#item-1')

  get 'insurance/' => 'pages#show', :defaults => { :id => '143' }

  get 'cldc/' => 'pages#cldc', as: 'cldc'

  get 'directory/' => 'directory#index'
  get 'directory/profile/:id', to: 'directory#profile', as: 'profile'

  #get ' Template get '', to: redirect('')

  #get ' for Admin section
  get 'admin/', to: redirect('https://culverhouse-user.culverhouse.ua.edu')

  get '/alabama-business-hall-of-fame', to: redirect('/abhof')

  get '/manderson-stem-path-to-the-mba-medical', to: redirect('https://culverhouse.ua.edu/news/article/566')
  
  get '/scholarships/', to: redirect('https://culverhouse.ua.edu/admissions/scholarships')
  get '/scholarship', to: redirect('https://culverhouse.ua.edu/admissions/scholarships')

  get 'http://brunolib.cba.ua.edu/', to: redirect('https://www.lib.ua.edu/libraries/bruno/')

	#Requested by Debra Wheatly on 2.24.2017
	get '/graduate-programs/masters-of-science-in-finance', to: redirect('https://culverhouse.ua.edu/graduate-programs/master-of-science-in-finance')
	
  #Departments
  get 'academics/departments/economics__finance__legal_studies/', to: redirect('academics/departments/economics-finance-legal-studies/')
  get 'academics/departments/information_systems__statistics_and_management_science/', to: redirect('academics/departments/information-systems-statistics-and-management-science/')

  get 'http://manderson.cba.ua.edu', to: redirect('https://culverhouse.ua.edu/graduate-programs')
  get 'http://manderson.culverhouse.ua.edu', to: redirect('https://culverhouse.ua.edu/graduate-programs')
  get 'manderson.cba.ua.edu', to: redirect('https://culverhouse.ua.edu/graduate-programs')
  get 'manderson.cculverhouse.ua.edu', to: redirect('https://culverhouse.ua.edu/graduate-programs')
  get '/manderson', to: redirect('https://culverhouse.ua.edu/graduate-programs')
  get '/grad', to: redirect('https://culverhouse.ua.edu/graduate-programs')
  
  #Masters
  get 'http://manderson.cba.ua.edu/academics/departments/masters_program/master_of_science_in_applied_statistics', to: redirect('graduate-programs/masters-of-science-in-applied-statistics/')
  get 'http://manderson.cba.ua.edu/academics/departments/masters_program/master_of_tax_accounting', to: redirect('graduate-programs/master-of-tax-accounting/')
  get 'http://manderson.cba.ua.edu/academics/departments/masters_program/master_of_accountancy', to: redirect('graduate-programs/master-of-accountancy/')
  get 'http://manderson.cba.ua.edu/academics/departments/masters_program/master_of_arts_in_economics', to: redirect('graduate-programs/master-of-arts-in-economics/')
  get 'http://manderson.cba.ua.edu/academics/departments/masters_program/master_of_science_in_finance', to: redirect('graduate-programs/masters-of-science-in-finance/')
  get 'http://manderson.cba.ua.edu/academics/departments/masters_program/master_of_science_in_marketing', to: redirect('graduate-programs/masters-of-science-in-marketing/')
  get 'http://manderson.cba.ua.edu/academics/departments/masters_program/master_of_science_in_operations_management', to: redirect('graduate-programs/online-masters-of-science-in-operations-management/')

  #MBA
  get 'http://culverhouse.ua.edu/emba', to: redirect('graduate-programs/emba/')
  get 'academics/departments/emba_program/', to: redirect('graduate-programs/emba/')
  get 'emba/', to: redirect('graduate-programs/emba/')
  get 'https://cba.ua.edu/academics/departments/emba_program', to: redirect('graduate-programs/emba/')
  get 'https://culverhouse.ua.edu/academics/departments/emba_program', to: redirect('graduate-programs/emba/')
  get 'http://manderson.cba.ua.edu/academics/departments/emba_program', to: redirect('graduate-programs/emba/')
  get 'http://manderson.cba.ua.edu/academics/departments/mba_program', to: redirect('graduate-programs/mba/')
  get 'http://manderson.culverhouse.ua.edu/academics/departments/mba_program/stem_path_to_the_mba', to: redirect('graduate-programs/stemmba/')
  get 'http://manderson.culverhouse.ua.edu/academics/departments/mba_program/create_path_to_the_mba', to: redirect('graduate-programs/createmba/')

  #PhD
  get 'http://manderson.cba.ua.edu/academics/departments/phd_program/finance', to: redirect('graduate-programs/phd-finance/')
  get 'http://manderson.cba.ua.edu/academics/departments/phd_program/economics', to: redirect('graduate-programs/phd-economics/')
  get 'http://manderson.cba.ua.edu/academics/departments/phd_program/accounting', to: redirect('graduate-programs/phd-accounting/')
  get 'http://manderson.cba.ua.edu/academics/departments/phd_program/applied_statistics', to: redirect('graduate-programs/phd-applied-statistics/')
  get 'http://manderson.cba.ua.edu/academics/departments/phd_program/marketing', to: redirect('graduate-programs/phd-marketing/')
  get 'http://manderson.cba.ua.edu/academics/departments/phd_program/management', to: redirect('graduate-programs/phd-management/')
  get 'http://manderson.cba.ua.edu/academics/departments/phd_program/operations_management', to: redirect('graduate-programs/phd-operations-management/')

  #Old Faculty get 'ion Links
  get '/faculty/profile/518', to: redirect('/directory/profile/kay-palan')
  get '/faculty/profile/423', to: redirect('/directory/profile/cadams')
  get '/faculty/profile/4', to: redirect('/directory/profile/aagrawal')
  get '/faculty/profile/8', to: redirect('/directory/profile/aallaway')
  get '/faculty/profile/187', to: redirect('/directory/profile/carmstro')
  get '/faculty/profile/139', to: redirect('/directory/profile/dbachrac')
  get '/faculty/profile/389', to: redirect('/directory/profile/tbaker')
  get '/faculty/profile/428', to: redirect('/directory/profile/lebaldwin')
  get '/faculty/profile/16', to: redirect('/directory/profile/bbarrett')
  get '/faculty/profile/557', to: redirect('/directory/profile/lblockson')
  get '/faculty/profile/23', to: redirect('/directory/profile/rbrooks')
  get '/faculty/profile/24', to: redirect('/directory/profile/pbrother')
  get '/faculty/profile/316', to: redirect('/directory/profile/jpbrown')
  get '/faculty/profile/365', to: redirect('/directory/profile/pbrummund')
  get '/faculty/profile/436', to: redirect('/directory/profile/srbuchheit')
  get '/faculty/profile/292', to: redirect('/directory/profile/jcalamus')
  get '/faculty/profile/531', to: redirect('/directory/profile/bcasselman')
  get '/faculty/profile/32', to: redirect('/directory/profile/schakrab')
  get '/faculty/profile/34', to: redirect('/directory/profile/kchapman')
  get '/faculty/profile/305', to: redirect('/directory/profile/sechen')
  get '/faculty/profile/529', to: redirect('/directory/profile/ychen')
  get '/faculty/profile/490', to: redirect('/directory/profile/nechilcutt')
  get '/faculty/profile/398', to: redirect('/directory/profile/jclampit')
  get '/faculty/profile/307', to: redirect('/directory/profile/jsclements')
  get '/faculty/profile/439', to: redirect('/directory/profile/jcochran')
  get '/faculty/profile/38', to: redirect('/directory/profile/dcook')
  get '/faculty/profile/486', to: redirect('/directory/profile/tcooper')
  get '/faculty/profile/463', to: redirect('/directory/profile/gcottrell')
  get '/faculty/profile/39', to: redirect('/directory/profile/jcover')
  get '/faculty/profile/394', to: redirect('/directory/profile/jcrew')
  get '/faculty/profile/40', to: redirect('/directory/profile/gdsouza')
  get '/faculty/profile/491', to: redirect('/directory/profile/jdatema')
  get '/faculty/profile/381', to: redirect('/directory/profile/cdavis')
  #get '/faculty/profile/', to: redirect('/directory/profile/rrpatil')
  get '/faculty/profile/532', to: redirect('/directory/profile/jadesimone')
  get '/faculty/profile/44', to: redirect('/directory/profile/tdezoort')
  get '/faculty/profile/416', to: redirect('/directory/profile/rdoherty')
  get '/faculty/profile/418', to: redirect('/directory/profile/mmdoxey')
  get '/faculty/profile/149', to: redirect('/directory/profile/pdrnevic')
  get '/faculty/profile/49', to: redirect('/directory/profile/rdulek')
  get '/faculty/profile/318', to: redirect('/directory/profile/helkaras')
  get '/faculty/profile/50', to: redirect('/directory/profile/helder')
  get '/faculty/profile/51', to: redirect('/directory/profile/aellinge')
  get '/faculty/profile/475', to: redirect('/directory/profile/tmenglish1')
  get '/faculty/profile/427', to: redirect('/directory/profile/scfant1')
  #For Carl Ferguson
  get '/faculty/profile/218', to: redirect('/directory/profile/ferguson')
  get '/personnel/carlferguson@bellsouth.net', to: redirect('/directory/profile/ferguson')
  get '/faculty/profile/327', to: redirect('/directory/profile/ferguson')
  
  get '/faculty/profile/143', to: redirect('/directory/profile/tfitzgib')
  get '/faculty/profile/220', to: redirect('/directory/profile/dford')
  get '/faculty/profile/537', to: redirect('/directory/profile/sforkmann')
  get '/faculty/profile/54', to: redirect('/directory/profile/gfranke')
  get '/faculty/profile/337', to: redirect('/directory/profile/gegivens')
  get '/faculty/profile/489', to: redirect('/directory/profile/dpgomez')
  get '/faculty/profile/59', to: redirect('/directory/profile/bgray')
  get '/faculty/profile/233', to: redirect('/directory/profile/cgreer')
  get '/faculty/profile/312', to: redirect('/directory/profile/jhalbesleben')
  get '/faculty/profile/61', to: redirect('/directory/profile/dhale')
  get '/faculty/profile/62', to: redirect('/directory/profile/jhale')
  get '/faculty/profile/154', to: redirect('/directory/profile/rhall')
  get '/faculty/profile/528', to: redirect('/directory/profile/cmhanby')
  get '/faculty/profile/525', to: redirect('/directory/profile/wbhankins')
  get '/faculty/profile/477', to: redirect('/directory/profile/pharms')
  get '/faculty/profile/464', to: redirect('/directory/profile/ehassler')
  get '/faculty/profile/142', to: redirect('/directory/profile/rhatfiel')
  get '/faculty/profile/68', to: redirect('/directory/profile/dheggem')
  get '/faculty/profile/545', to: redirect('/directory/profile/jheins')
  get '/faculty/profile/364', to: redirect('/directory/profile/djhender')
	get '/djhender/curriculum-vitae/henderson_cv.pdf', to: redirect('https://culverhouse.ua.edu/uploads/ckeditor/pictures/92/content_henderson_cv.pdf')
  get '/faculty/profile/457', to: redirect('/directory/profile/pjhill')
  get '/faculty/profile/519', to: redirect('/directory/profile/khoang')
  get '/faculty/profile/538', to: redirect('/directory/profile/bwhochstein')
  get '/faculty/profile/306', to: redirect('/directory/profile/mtholt')
  get '/faculty/profile/315', to: redirect('/directory/profile/ghouston')
  get '/faculty/profile/75', to: redirect('/directory/profile/rhouston')
  get '/faculty/profile/188', to: redirect('/directory/profile/wjackson')
  get '/faculty/profile/440', to: redirect('/directory/profile/vjavine')
  get '/faculty/profile/530', to: redirect('/directory/profile/rjena')
  get '/faculty/profile/446', to: redirect('/directory/profile/ejernigan')
  get '/faculty/profile/144', to: redirect('/directory/profile/pjindapo')
  get '/faculty/profile/356', to: redirect('/directory/profile/pjohnson')
  get '/faculty/profile/195', to: redirect('/directory/profile/bkeskin')
  get '/faculty/profile/150', to: redirect('/directory/profile/jking')
  get '/faculty/profile/523', to: redirect('/directory/profile/lkong')
  get '/faculty/profile/400', to: redirect('/directory/profile/dlacek')
  get '/faculty/profile/534', to: redirect('/directory/profile/kalaing')
  get '/faculty/profile/85', to: redirect('/directory/profile/jlee')
  get '/faculty/profile/508', to: redirect('/directory/profile/jrlittle')
  get '/faculty/profile/524', to: redirect('/directory/profile/xliu')
  get '/faculty/profile/520', to: redirect('/directory/profile/cjlocke')
  get '/faculty/profile/286', to: redirect('/directory/profile/ejlodree')
  get '/faculty/profile/295', to: redirect('/directory/profile/tjlopez')
  get '/faculty/profile/192', to: redirect('/directory/profile/jma')
  get '/faculty/profile/471', to: redirect('/directory/profile/pmagnusson')
  get '/faculty/profile/90', to: redirect('/directory/profile/lmarino')
  get '/faculty/profile/458', to: redirect('/directory/profile/akmarks')
  get '/faculty/profile/309', to: redirect('/directory/profile/jmartin')
  get '/faculty/profile/434', to: redirect('/directory/profile/dmccormack')
  get '/faculty/profile/93', to: redirect('/directory/profile/lmckinne')
  get '/faculty/profile/94', to: redirect('/directory/profile/rmcleod')
  get '/faculty/profile/147', to: redirect('/directory/profile/dmcmanus')
  get '/faculty/profile/369', to: redirect('/directory/profile/vmelnykov')
  get '/faculty/profile/194', to: redirect('/directory/profile/smelouk')
  get '/faculty/profile/95', to: redirect('/directory/profile/jmeyer')
  get '/faculty/profile/558', to: redirect('/directory/profile/semiesse')
  get '/faculty/profile/535', to: redirect('/directory/profile/mjmills')
  get '/faculty/profile/308', to: redirect('/directory/profile/dminyard')
  get '/faculty/profile/98', to: redirect('/directory/profile/jmittent')
  get '/faculty/profile/222', to: redirect('/directory/profile/smobbs')
  get '/faculty/profile/99', to: redirect('/directory/profile/rmorgan')
  get '/faculty/profile/101', to: redirect('/directory/profile/dmothers')
  get '/faculty/profile/521', to: redirect('/directory/profile/kmullally')
  get '/faculty/profile/493', to: redirect('/directory/profile/kmurali')
  get '/faculty/profile/396', to: redirect('/directory/profile/jsnaidoo')
  get '/faculty/profile/509', to: redirect('/directory/profile/rjnorman')
  get '/faculty/profile/437', to: redirect('/directory/profile/dpalmer')
  get '/faculty/profile/391', to: redirect('/directory/profile/npanagapolous')
  get '/faculty/profile/165', to: redirect('/directory/profile/lparsons')
  get '/faculty/profile/450', to: redirect('/directory/profile/jparton')
  get '/faculty/profile/105', to: redirect('/directory/profile/ppecorin')
  get '/faculty/profile/556', to: redirect('/directory/profile/jperdue')
  get '/faculty/profile/224', to: redirect('/directory/profile/mperry')
  get '/faculty/profile/419', to: redirect('/directory/profile/tjpollard')
  get '/faculty/profile/445', to: redirect('/directory/profile/mpope')
  get '/faculty/profile/380', to: redirect('/directory/profile/mporter')
  get '/faculty/profile/370', to: redirect('/directory/profile/cposey')
  get '/faculty/profile/146', to: redirect('/directory/profile/wrabel')
  get '/faculty/profile/148', to: redirect('/directory/profile/uraja')
  get '/faculty/profile/193', to: redirect('/directory/profile/rreed')
  get '/faculty/profile/527', to: redirect('/directory/profile/kregmi')
  get '/faculty/profile/141', to: redirect('/directory/profile/areiteng')
  get '/faculty/profile/191', to: redirect('/directory/profile/kreynold')
  get '/faculty/profile/536', to: redirect('/directory/profile/caringler')
  get '/faculty/profile/111', to: redirect('/directory/profile/wrobbins')
  get '/faculty/profile/539', to: redirect('/directory/profile/sgrobinson')
  get '/faculty/profile/522', to: redirect('/directory/profile/aross')
  get '/faculty/profile/116', to: redirect('/directory/profile/eschnee')
  get '/faculty/profile/551', to: redirect('/directory/profile/kshastry')
  get '/faculty/profile/552', to: redirect('/directory/profile/hshipley')
  get '/faculty/profile/268', to: redirect('/directory/profile/msicilia')
  get '/faculty/profile/540', to: redirect('/directory/profile/njsirianni')
  get '/faculty/profile/442', to: redirect('/directory/profile/rsmallwood')
  get '/faculty/profile/121', to: redirect('/directory/profile/csox')  
  get '/faculty/profile/454', to: redirect('/directory/profile/jstiffler')
  get '/faculty/profile/383', to: redirect('/directory/profile/srstinson')
  get '/faculty/profile/384', to: redirect('/directory/profile/mstone') 
  get '/faculty/profile/488', to: redirect('/directory/profile/jstrayer')
  get '/faculty/profile/125', to: redirect('/directory/profile/astrickl')
  get '/faculty/profile/127', to: redirect('/directory/profile/gtaylor') 
  get '/faculty/profile/304', to: redirect('/directory/profile/mjvanessen')
  get '/faculty/profile/447', to: redirect('/directory/profile/wwalsh')
  get '/faculty/profile/441', to: redirect('/directory/profile/albertwang') 
  get '/faculty/profile/533', to: redirect('/directory/profile/tmwelbourne')
  get '/faculty/profile/541', to: redirect('/directory/profile/sawestjohn')
  get '/faculty/profile/526', to: redirect('/directory/profile/cawhaley1') 
  get '/faculty/profile/162', to: redirect('/directory/profile/mwhitman')
  get '/faculty/profile/136', to: redirect('/directory/profile/ewilliam')
  get '/faculty/profile/485', to: redirect('/directory/profile/dustin-wood') 
  get '/faculty/profile/511', to: redirect('/directory/profile/hewright')
  get '/faculty/profile/438', to: redirect('/directory/profile/myavuz')
  get '/faculty/profile/387', to: redirect('/directory/profile/tyeh') 
  get '/faculty/profile/317', to: redirect('/directory/profile/kzirlott')

  #Old Staff get 's
  get '/faculty/profile/514', to: redirect('/directory/profile/adams')
  get '/faculty/profile/561', to: redirect('/directory/profile/scalexander') 
  get '/faculty/profile/3', to: redirect('/directory/profile/saddy') 
  get '/faculty/profile/462', to: redirect('/directory/profile/rallison')
  get '/faculty/profile/293', to: redirect('/directory/profile/caltemara')
  get '/faculty/profile/340', to: redirect('/directory/profile/hammons')
  get '/faculty/profile/11', to: redirect('/directory/profile/mavant')
  get '/faculty/profile/550', to: redirect('/directory/profile/snawondo') 
  get '/faculty/profile/562', to: redirect('/directory/profile/vsbaggett')
  get '/faculty/profile/13', to: redirect('/directory/profile/jbaker')
  get '/faculty/profile/348', to: redirect('/directory/profile/pgbarrentine')
  get '/faculty/profile/259', to: redirect('/directory/profile/dblackbu')
  get '/faculty/profile/246', to: redirect('/directory/profile/sboggs') 
  get '/faculty/profile/504', to: redirect('/directory/profile/bbrosier')
  get '/faculty/profile/239', to: redirect('/directory/profile/lburleso')
  get '/faculty/profile/563', to: redirect('/directory/profile/clcapan')
  get '/faculty/profile/260', to: redirect('/directory/profile/mcarroll')
  get '/faculty/profile/33', to: redirect('/directory/profile/cchamber') 
 # get '/faculty/profile/', to: redirect('/directory/profile/jclark')
  get '/faculty/profile/429', to: redirect('/directory/profile/dclarke')
  get '/faculty/profile/546', to: redirect('/directory/profile/blcollins') 
  get '/faculty/profile/564', to: redirect('/directory/profile/scollins')
  get '/faculty/profile/565', to: redirect('/directory/profile/jecooper')
  get '/faculty/profile/329', to: redirect('/directory/profile/cover001') 
  get '/faculty/profile/243', to: redirect('/directory/profile/scowles')
  get '/faculty/profile/346', to: redirect('/directory/profile/lgcox')
  #get '/faculty/profile/271', to: redirect('/directory/profile/bdavis')
  get '/faculty/profile/171', to: redirect('/directory/profile/hdavis')
  get '/faculty/profile/255', to: redirect('/directory/profile/kdiano') 
  get '/faculty/profile/542', to: redirect('/directory/profile/ldill')
  get '/faculty/profile/182', to: redirect('/directory/profile/seady')
  get '/faculty/profile/547', to: redirect('/directory/profile/rkellison') 
  get '/faculty/profile/232', to: redirect('/directory/profile/kfondren')
  get '/faculty/profile/566', to: redirect('/directory/profile/mjsanders') 
  get '/faculty/profile/425', to: redirect('/directory/profile/bafowler')
  get '/faculty/profile/55', to: redirect('/directory/profile/bzfrost')
  get '/faculty/profile/56', to: redirect('/directory/profile/mfulghum')
  get '/faculty/profile/355', to: redirect('/directory/profile/sgendle')
  get '/faculty/profile/247', to: redirect('/directory/profile/dgilbert') 
  get '/faculty/profile/284', to: redirect('/directory/profile/gglaze')
  get '/faculty/profile/567', to: redirect('/directory/profile/jguo23')
  get '/faculty/profile/264', to: redirect('/directory/profile/kbaker')        
  get '/faculty/profile/214', to: redirect('/directory/profile/dhamner')
  get '/faculty/profile/451', to: redirect('/directory/profile/chanson') 
  get '/faculty/profile/476', to: redirect('/directory/profile/kfhardemon')
  get '/faculty/profile/216', to: redirect('/directory/profile/rhayes')
  get '/faculty/profile/68', to: redirect('/directory/profile/ahill')
  get '/faculty/profile/543', to: redirect('/directory/profile/qhoang')
  get '/faculty/profile/221', to: redirect('/directory/profile/mholifie') 
  get '/faculty/profile/510', to: redirect('/directory/profile/khoward')
  get '/faculty/profile/76', to: redirect('/directory/profile/aijaz')
  get '/faculty/profile/480', to: redirect('/directory/profile/jringenrieth') 
  get '/faculty/profile/459', to: redirect('/directory/profile/aaingram')
  get '/faculty/profile/433', to: redirect('/directory/profile/rtjennings') 
  get '/faculty/profile/244', to: redirect('/directory/profile/ljohnson1')
  get '/faculty/profile/168', to: redirect('/directory/profile/jjones')
  get '/faculty/profile/560', to: redirect('/directory/profile/awkellum')
  get '/faculty/profile/473', to: redirect('/directory/profile/dkenaston')
  get '/faculty/profile/512', to: redirect('/directory/profile/mfknight') 
  get '/faculty/profile/290', to: redirect('/directory/profile/tnlsims')
  get '/faculty/profile/357', to: redirect('/directory/profile/elai')
  get '/faculty/profile/82', to: redirect('/directory/profile/slang') 
  #get '/faculty/profile/', to: redirect('/directory/profile/mrlarsen')
  get '/faculty/profile/163', to: redirect('/directory/profile/gleasor') 
  get '/faculty/profile/507', to: redirect('/directory/profile/lewis060')
  get '/faculty/profile/494', to: redirect('/directory/profile/alowe')
  get '/faculty/profile/229', to: redirect('/directory/profile/dmaguire')
  get '/faculty/profile/231', to: redirect('/directory/profile/amarcum')
  get '/faculty/profile/176', to: redirect('/directory/profile/tmauter') 
  get '/faculty/profile/505', to: redirect('/directory/profile/smcguigan')
  get '/faculty/profile/172', to: redirect('/directory/profile/dmerchan')
  get '/faculty/profile/569', to: redirect('/directory/profile/smiesse')
  get '/faculty/profile/265', to: redirect('/directory/profile/dminor')
  get '/faculty/profile/342', to: redirect('/directory/profile/cmorris')
  get '/faculty/profile/169', to: redirect('/directory/profile/jmoyer')
  get '/faculty/profile/358', to: redirect('/directory/profile/snewman') 
  get '/faculty/profile/432', to: redirect('/directory/profile/knzaku')
  get '/faculty/profile/481', to: redirect('/directory/profile/lnoncale')
  get '/faculty/profile/444', to: redirect('/directory/profile/aoswalt')        
  get '/faculty/profile/420', to: redirect('/directory/profile/cpage')
  get '/faculty/profile/502', to: redirect('/directory/profile/mepatterson1') 
  get '/faculty/profile/513', to: redirect('/directory/profile/cpeters')
  get '/faculty/profile/497', to: redirect('/directory/profile/knpivetz')
  get '/faculty/profile/474', to: redirect('/directory/profile/pvpohuski')
  get '/faculty/profile/472', to: redirect('/directory/profile/lars-powell')
  get '/faculty/profile/506', to: redirect('/directory/profile/creynolds') 
  get '/faculty/profile/371', to: redirect('/directory/profile/vriiman')
  get '/faculty/profile/351', to: redirect('/directory/profile/blriter')
  get '/faculty/profile/554', to: redirect('/directory/profile/scrobichaux') 
  get '/faculty/profile/367', to: redirect('/directory/profile/hrowan')
  get '/faculty/profile/377', to: redirect('/directory/profile/lsamaniego') 
  get '/faculty/profile/460', to: redirect('/directory/profile/sschmidt')
  get '/faculty/profile/414', to: redirect('/directory/profile/mscott')
  get '/faculty/profile/303', to: redirect('/directory/profile/askivjani')
  get '/faculty/profile/572', to: redirect('/directory/profile/kskivjani')
  get '/faculty/profile/122', to: redirect('/directory/profile/nspence') 
  get '/faculty/profile/469', to: redirect('/directory/profile/fstewart')
  get '/faculty/profile/553', to: redirect('/directory/profile/jmstreit')
  get '/faculty/profile/483', to: redirect('/directory/profile/tsyx') 
  get '/faculty/profile/470', to: redirect('/directory/profile/mbtatum')
  get '/faculty/profile/466', to: redirect('/directory/profile/rthurman') 
  get '/faculty/profile/325', to: redirect('/directory/profile/satillie')
  get '/faculty/profile/263', to: redirect('/directory/profile/avincent')
  get '/faculty/profile/376', to: redirect('/directory/profile/gsward')
  get '/faculty/profile/179', to: redirect('/directory/profile/dwheatle')
  get '/faculty/profile/373', to: redirect('/directory/profile/lwhite') 
  get '/faculty/profile/135', to: redirect('/directory/profile/pwhite')
  get '/faculty/profile/374', to: redirect('/directory/profile/pewilson')
  get '/faculty/profile/548', to: redirect('/directory/profile/wilson')
  get '/faculty/profile/235', to: redirect('/directory/profile/ewinters') 
  get '/faculty/profile/515', to: redirect('/directory/profile/kcwise')
  get '/faculty/profile/492', to: redirect('/directory/profile/xyang')
  get '/faculty/profile/184', to: redirect('/directory/profile/byeager')
  
  #Centers
  get '/aciir', to: redirect('http://aciir.culverhouse.ua.edu')
  get '/cber', to: redirect('http://cber.cba.ua.edu')
  get '/apc', to: redirect('http://apc.cba.ua.edu')
  get '/acre', to: redirect('http://acre.cba.ua.edu')
  
  #Dr. Robbins
  get '/wrobbins/lecture-2-1', to: redirect('http://ua.tegrity.com/#/recording/a86b3b79-e46c-46fd-8fdb-8dd6b496d54e?playbackToken=2KSTMYY2WOBH4')
	get '/wrobbins/lecture-2-2', to: redirect('http://ua.tegrity.com/#/recording/bc03cda0-3f84-44ad-9cec-26def01028f8?playbackToken=2JPPZD3L6LD2S')
	get '/wrobbins/lecture-2-3', to: redirect('http://ua.tegrity.com/#/recording/95dbcb17-ce36-4a77-a2e5-a610e46ee398?playbackToken=3R0UM5S985VKB')
	get '/wrobbins/lecture-2-4', to: redirect('http://ua.tegrity.com/#/recording/662fb806-1dfe-492c-a6d6-5e6a1db39335?playbackToken=LSTSQI5AJZV5')
	get '/wrobbins/lecture-2-5', to: redirect('http://ua.tegrity.com/#/recording/943b6660-09e7-4f67-95dc-bf17aee10a7c?playbackToken=1JA673WK1MBPX')
  get '/wrobbins/lecture-3-1', to: redirect('http://ua.tegrity.com/#/recording/addfc95a-c770-4473-b071-b26df5e4dd13?playbackToken=MU15DKF3S159')
	get '/wrobbins/lecture-3-2', to: redirect('http://ua.tegrity.com/#/recording/bcfb0b63-6e8e-4449-943d-63bdf4300a66?playbackToken=2IBY70EBRQJ1')
	get '/wrobbins/lecture-3-3', to: redirect('http://ua.tegrity.com/#/recording/7af5d68a-3cce-44db-98be-08f4bc4ac209?playbackToken=358AK9FI6ZI1J')
	get '/wrobbins/lecture-3-4', to: redirect('http://ua.tegrity.com/#/recording/c16fd3e4-4cd0-42f8-82ac-4bfff0629eb2?playbackToken=2JEEYBERYX8EA')
	get '/wrobbins/lecture-4-1', to: redirect('http://ua.tegrity.com/#/recording/8d31f35d-3cba-4035-88bb-f50412a98b82?playbackToken=3I4P2T3YEEPDG')
	get '/wrobbins/lecture-4-2', to: redirect('http://ua.tegrity.com/#/recording/c7097468-84f7-45be-88f7-b42dff9679cd?playbackToken=1L8EFZTRGVKRE')
	get '/wrobbins/lecture-4-3', to: redirect('http://ua.tegrity.com/#/recording/11f90538-9dc8-4583-a746-76967e67073b?playbackToken=21NACOHB8C8R2')
	get '/wrobbins/lecture-4-4', to: redirect('http://ua.tegrity.com/#/recording/508a939c-9568-42aa-9aa7-5a490bf5e9ea?playbackToken=2NDFFQAL0N4JZ')
	get '/wrobbins/lecture-4-5', to: redirect('http://ua.tegrity.com/#/recording/280e001c-3643-4d47-bba6-56a9efd15e50?playbackToken=2FKPN10I50FMY')
	get '/wrobbins/lecture-5-1', to: redirect('http://ua.tegrity.com/#/recording/831099cb-6db8-4abc-9d22-c34df093f80d?playbackToken=3UPDDHADHXFB3')
	get '/wrobbins/lecture-5-2', to: redirect('http://ua.tegrity.com/#/recording/990d664a-5e4f-4229-a700-b23aec8e26b4?playbackToken=13C0Y7G9VRQQK')
	get '/wrobbins/lecture-5-3', to: redirect('http://ua.tegrity.com/#/recording/2684b081-49d5-406c-96c0-d1344b9eba94?playbackToken=125FX0SB7PHAQ')
	get '/wrobbins/lecture-5-4', to: redirect('http://ua.tegrity.com/#/recording/b6ce89a2-c20b-45ab-a471-d95a15b46393?playbackToken=3ERQTL1OY9REU')
	get '/wrobbins/lecture-5-5', to: redirect('http://ua.tegrity.com/#/recording/be20e786-9822-40fb-938e-5a52c1252153?playbackToken=3V6MDVK5N1B1I')
	get '/wrobbins/lecture-5-6', to: redirect('http://ua.tegrity.com/#/recording/d17f4d8a-e175-4256-8eb5-754f2d35f212?playbackToken=98DLLIACT2VT')
	get '/wrobbins/lecture-6-1', to: redirect('http://ua.tegrity.com/#/recording/17c08484-cb2f-4bce-9d1d-74fcceb30a6e?playbackToken=2CD1A8CGW5BAQ')
	get '/wrobbins/lecture-6-2', to: redirect('http://ua.tegrity.com/#/recording/28860d2a-24cd-42f6-90e4-b513a978c090?playbackToken=PV7PI9QRO3SW')
	get '/wrobbins/lecture-6-3', to: redirect('http://ua.tegrity.com/#/recording/6d732930-1b6c-4d47-8618-80103b1065fc?playbackToken=T9D6NZGI3JTC')
	get '/wrobbins/lecture-6-4', to: redirect('http://ua.tegrity.com/#/recording/c82011a9-33f8-450a-bf66-73b90e0a0f16?playbackToken=2BMURA0HBPUG5')
	get '/wrobbins/lecture-7-1', to: redirect('http://ua.tegrity.com/#/recording/d9d1543e-c9b7-46d6-a891-6381d4c62def?playbackToken=27S82OYY5PTKH')
	get '/wrobbins/lecture-7-2', to: redirect('http://ua.tegrity.com/#/recording/7dfcc049-67c1-48af-8251-d5b5d276259b?playbackToken=3E5OCW6XB0G7V')
	get '/wrobbins/lecture-8-1', to: redirect('http://ua.tegrity.com/#/recording/06553dc1-ff2a-487e-aa92-ca8ebfa3d12b?playbackToken=1RHIV0ESPEIM')
	get '/wrobbins/lecture-8-2', to: redirect('http://ua.tegrity.com/#/recording/15668971-aff6-4cd2-ac0f-2edc00e7c611?playbackToken=34CD8FU1Y08C5')
	get '/wrobbins/lecture-8-3', to: redirect('http://ua.tegrity.com/#/recording/eece2646-9656-4cd0-b0de-b449949f5c77?playbackToken=2S0RX75TOG9F8')
	get '/wrobbins/lecture-financial-statements', to: redirect('http://ua.tegrity.com/#/recording/5bacf64d-ff98-4215-843f-3bf437d0c976?playbackToken=37Q2CYXHYQRON')
  
  get '/bruno-library', to: redirect('https://www.lib.ua.edu/libraries/bruno/')
  
  #Temp Homepage
  root to: 'homepage#welcome'

  get 'store/', :to => redirect('https://epay.ua.edu/C20219_ustores/web/store_main.jsp?STOREID=6&SINGLESTORE=true')

  resources :search, :only => :index
  get 'sitesearch/' => 'search#index'

  #Dynamic Error Views
  get '/404', :to => 'errors#not_found'
  get '/500', :to => 'errors#internal_server_error'
  
  get 'news/article/:id' => 'articles#show', as:'article'
  get 'news/' => 'newsroom#articles'
  get 'culverhouse-news' => redirect('/news')

  get 'events/' => 'newsroom#events'
  get 'event/:id' => 'newsroom#event'
  get 'culverhouse-events' => redirect("/events")

  # Faculty, Staff, Experts, and User Profiles
  #resources :employee_types

  # User Management Section To Dos:
  # 1 - Local User Management
  # 2 - Manderson Student Registration
  # 3 - LDAP Authentication

  #devise_for :users
  #resources :profiles
  #devise_for :users, :path_prefix => 'my'
  get 'expertises/:expertise', to: 'users#index', as: 'expertise'

  get 'alumni/', to: 'pages#alumni', :defaults => { :id => '19' }
  get '/alumni/:id', to: 'pages#alumni', as: 'alumnisub'

  get 'the-executive' => 'pages#full_page', :defaults => { :id => '129' }
  
  get '/alabama-insurance-society' => 'pages#show2', :defaults => { :id => '122' }
	get '/ais', to: redirect('/alabama-insurance-society')
	
  #get '/aei' => 'pages#show', :defaults => { :id => '144' }
  #get '/aei/:id' => 'pages#show'

  get 'faculty-and-staff-resources/' => 'pages#show/a', :defaults => { :id => '120' }
  
  #get 'corporate-partners/' => 'pages#full_page', :defaults => { :id => '110' }
  #get 'summer-programs/'

  get '/acap' => 'pages#acap', :defaults => { :id => '149' }
  get '/acap/:id' => 'pages#acap'
  #get 'cmap/' => 'pages#full_page', :defaults => { :id => '139' }
  
  get 'academics/departments/management/hrm/:id' => 'pages#full_page'
  get 'hrm/' => 'pages#full_page', :defaults => { :id => '103' }
  
  get 'international-business-programs/' => 'pages#ibp', :defaults => { :id => '101' }
  get 'international-business-programs/:id' => 'pages#ibp', as: 'ibpsub'
  get 'ibp/', to: redirect('/international-business-programs')
  get 'international-business/', to: redirect('/international-business-programs')

  #get 'about/' => 'pages#about', :defaults => { :id => '1' }
  #get 'about/:id' => 'pages#about', as: 'aboutsub'

  #get ':id', to: 'pages#show', as: :page, constraints: { id: /.*/ }

  get 'research-and-outreach-centers/' => 'pages#nolinks', :defaults => { :id => '96' }
  
  get 'social-media/' => 'pages#show', :defaults => { :id => '95' }
  
  get 'contacts/' => 'pages#show', :defaults => { :id => '94' }

  get 'investing-in-the-college/' => 'pages#full_page', :defaults => { :id => '17' }

  get 'career/' => 'pages#show', :defaults => { :id => '82' }
  get 'career/:id' => 'pages#show'

  get 'ca/' => 'culverhouse_ambassadors#show', :defaults => { :id => '142' }
  get 'ca/apply' => 'culverhouse_ambassadors#new'
  post 'ca/apply' => 'culverhouse_ambassadors#create', :as => :create_ca_application
  get 'ca/thanks' => 'culverhouse_ambassadors#thanks'
   
  get 'graduate-students/' => 'pages#full_page', :defaults => { :id => '78' }
  get 'graduate-students/:id' => 'pages#full_page'
  
  get 'undergraduates/' => 'pages#audience', :defaults => { :id => '81' }
  get 'undergraduates/:id' => 'pages#audience'
  
  get 'admissions/' => 'pages#full_page', :defaults => { :id => '9' }
  get 'admissions/:id' => 'pages#full_page'

  # get 'students/' => 'pages#students'
  # get 'students/:id' => 'pages#students', as: 'studentsub'
  
  get 'academics/departments/accountancy' => 'pages#show', :defaults => { :id => '44' }
  get 'academics/departments/economics-finance-legal-studies' => 'pages#show', :defaults => { :id => '45' }
  get 'academics/departments/general-business' => 'pages#show', :defaults => { :id => '46' }  
  get 'academics/departments/information-systems-statistics-and-management-science' => 'pages#show', :defaults => { :id => '47' }
  get 'academics/departments/management' => 'pages#show', :defaults => { :id => '48' }
  get 'academics/departments/marketing' => 'pages#show', :defaults => { :id => '49' }
  get 'academics/departments/online' => 'pages#show', :defaults => { :id => '50' }
  
  get 'academics/' => 'pages#show', :defaults => { :id => '20' }

  get 'academics/departments/:id' => 'departments#show'
  
  get 'experts/' => 'pages#full_page', :defaults => { :id => '99' }
  get 'experts/:id' => 'pages#full_page'
  
  get 'dean-palan/' => 'pages#full_page', :defaults => { :id => '22' }

  get '/:id' => 'pages#show2'
  get '/:parent_id/:id' => 'pages#show2'

end