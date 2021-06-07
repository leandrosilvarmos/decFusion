package com.example.dacfusion.model.response

import com.example.dacfusion.api.UserModel
import com.google.gson.annotations.SerializedName

data class LoginResponse (val user:UserModel)








//(
//
//@SerializedName("user")
//var user: User,
//
//@SerializedName("token")
//var token: String
//){
//    data class User (
//        @SerializedName("id")
//        var id: Int,
//
//        @SerializedName("name")
//        var name: String,
//
//        @SerializedName("email")
//        var email: String,
//
//        @SerializedName("password")
//        var password: String,
//
//        @SerializedName("createdAt")
//        var createdAt: String,
//
//        @SerializedName("updateAt")
//        var updateAt: String
//    )
//}



