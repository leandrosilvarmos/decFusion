package com.example.dacfusion.model


data class User(
    val id: Int,
    val email: String?,
    val name: String?,
    val password: String?,
    val token: String?

)



//        val id: Int?,
//        val email: String?,
//        val password: String?,
//        val token: String?

//@SerializedName("email")
//var email: String,
//
//@SerializedName("password")
//var password:String